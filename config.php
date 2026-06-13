<?php
/**
 * Configuration file for CJs All In One Handyman Services Website
 * Place your API credentials and setting configurations here.
 */

// Google Developer API Key (Create one for free in Google Cloud Console)
define('GOOGLE_API_KEY', 'YOUR_GOOGLE_API_KEY_HERE');

// Google Drive Shared Folder ID (from the public share link)
define('GOOGLE_DRIVE_FOLDER_ID', 'YOUR_GOOGLE_DRIVE_FOLDER_ID_HERE');

// Web3Forms Access Key (Get one for free at https://web3forms.com)
define('WEB3FORMS_ACCESS_KEY', 'YOUR_WEB3FORMS_ACCESS_KEY_HERE');

// Cache settings for the Google Drive API calls (to prevent hitting limits and load fast)
define('CACHE_FILE', __DIR__ . '/assets/gallery_cache.json');
define('CACHE_LIFETIME', 3600); // 3600 seconds = 1 hour
