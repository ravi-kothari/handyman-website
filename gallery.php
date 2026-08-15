<?php
/**
 * Dynamic Google Drive Gallery API
 * Fetches, caches, and serving images from a public Google Drive folder.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow local testing or cross-origin requests

// 1. Load config
if (!file_exists(__DIR__ . '/config.php')) {
    echo json_encode(['error' => 'config.php not found.']);
    exit;
}
require_once __DIR__ . '/config.php';

// 2. Check if configuration is set
if (GOOGLE_API_KEY === 'YOUR_GOOGLE_API_KEY_HERE' || GOOGLE_DRIVE_FOLDER_ID === 'YOUR_GOOGLE_DRIVE_FOLDER_ID_HERE') {
    // If not configured, return fallback mockup images
    echo json_encode(get_fallback_images());
    exit;
}

// Ensure assets directory exists for cache
if (!is_dir(__DIR__ . '/assets')) {
    mkdir(__DIR__ . '/assets', 0755, true);
}

// 3. Check cache
$use_cache = false;
if (file_exists(CACHE_FILE)) {
    $cache_age = time() - filemtime(CACHE_FILE);
    if ($cache_age < CACHE_LIFETIME) {
        $use_cache = true;
    }
}

if ($use_cache) {
    $cached_data = file_get_contents(CACHE_FILE);
    if ($cached_data !== false) {
        echo $cached_data;
        exit;
    }
}

// 4. Fetch fresh data from Google Drive API
$folder_id = GOOGLE_DRIVE_FOLDER_ID;
$api_key = GOOGLE_API_KEY;

// Query to get only images inside the specified folder, ordered by created date (newest first)
$query = urlencode("'" . $folder_id . "' in parents and mimeType contains 'image/' and trashed = false");
$fields = urlencode("files(id,name,mimeType,createdTime)");
$url = "https://www.googleapis.com/drive/v3/files?q={$query}&orderBy=createdTime+desc&key={$api_key}&fields={$fields}&pageSize=30";

$response = make_http_request($url);

if ($response) {
    $data = json_decode($response, true);
    
    if (isset($data['files']) && is_array($data['files'])) {
        $images = [];
        
        foreach ($data['files'] as $file) {
            $id = $file['id'];
            $name = pathinfo($file['name'], PATHINFO_FILENAME);
            
            // Check if name is a generic camera/upload name
            $is_generic = false;
            $lower_name = strtolower($name);
            if (
                strpos($lower_name, 'whatsapp') !== false ||
                strpos($lower_name, 'screenshot') !== false ||
                preg_match('/^(img|pxl|dsc|dscn|image|photo)[-_]?\d+/', $lower_name) ||
                preg_match('/^\d+$/', $lower_name) ||
                preg_match('/^[a-f0-9\-]{36}$/i', $lower_name)
            ) {
                $is_generic = true;
            }
            
            if ($is_generic) {
                $label = 'Recent Project';
            } else {
                // Format name to be readable (replace hyphens/underscores with spaces, capitalize)
                $label = ucwords(str_replace(['-', '_'], ' ', $name));
            }
            
            // We use Google's content delivery servers to fetch images at custom sizes efficiently
            $images[] = [
                'id' => $id,
                'label' => $label,
                'url' => "https://lh3.googleusercontent.com/d/{$id}",
                'thumbnail' => "https://lh3.googleusercontent.com/d/{$id}=w600-h450-p", // 4:3 cropped thumbnail
                'created' => $file['createdTime']
            ];
        }
        
        // Write to cache
        $json_output = json_encode($images);
        file_put_contents(CACHE_FILE, $json_output);
        
        echo $json_output;
        exit;
    }
}

// 5. Fallback in case of Google API failure
if (file_exists(CACHE_FILE)) {
    // If API failed but we have an old cache, use it!
    echo file_get_contents(CACHE_FILE);
} else {
    // Return mockups so the site doesn't load blank
    echo json_encode(get_fallback_images());
}

/**
 * Perform a HTTP GET request, trying cURL first and falling back to file_get_contents.
 */
function make_http_request($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (PHP_VERSION_ID < 80000) {
            curl_close($ch);
        }
        
        if ($http_code === 200) {
            return $output;
        }
    }
    
    // Fallback if cURL is disabled on GoDaddy hosting
    $opts = [
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: PHP-GoogleDrive-Gallery/1.0\r\n",
            'timeout' => 10
        ]
    ];
    $context = stream_context_create($opts);
    return @file_get_contents($url, false, $context);
}

/**
 * Returns mock/placeholder images when Google Drive is not configured
 */
function get_fallback_images() {
    return [
        [
            'id' => 'mock-carpentry',
            'label' => 'Custom Wood Bench',
            'url' => 'assets/carpentry.png',
            'thumbnail' => 'assets/carpentry.png',
            'created' => date('Y-m-d\TH:i:s\Z')
        ],
        [
            'id' => 'mock-repairs',
            'label' => 'Kitchen Faucet Repair',
            'url' => 'assets/repairs.png',
            'thumbnail' => 'assets/repairs.png',
            'created' => date('Y-m-d\TH:i:s\Z', strtotime('-1 day'))
        ],
        [
            'id' => 'mock-painting',
            'label' => 'Interior Painting Project',
            'url' => 'assets/painting.png',
            'thumbnail' => 'assets/painting.png',
            'created' => date('Y-m-d\TH:i:s\Z', strtotime('-2 days'))
        ],
        [
            'id' => 'mock-maintenance',
            'label' => 'Gate Repair & Installation',
            'url' => 'assets/maintenance.png',
            'thumbnail' => 'assets/maintenance.png',
            'created' => date('Y-m-d\TH:i:s\Z', strtotime('-3 days'))
        ]
    ];
}
