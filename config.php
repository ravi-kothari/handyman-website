<?php
/**
 * Configuration file for CJs All In One Handyman Services Website
 * Place your API credentials and setting configurations here.
 */

// Google Developer API Key (Create one for free in Google Cloud Console)
define('GOOGLE_API_KEY', 'AIzaSyDXoVuPoTWq7LhVxLRJGhmnOckzLHwMmXM');

// Google Drive Shared Folder ID (from the public share link)
define('GOOGLE_DRIVE_FOLDER_ID', '12D9IbbHCG96c3XZJ6epumOZVEIVcNCC3');

// Web3Forms Access Key (Get one for free at https://web3forms.com)
define('WEB3FORMS_ACCESS_KEY', '1ba1add3-48be-4e5f-ae9e-505507a07f4f');

// Cache settings for the Google Drive API calls (to prevent hitting limits and load fast)
define('CACHE_FILE', __DIR__ . '/assets/gallery_cache.json');
define('CACHE_LIFETIME', 3600); // 3600 seconds = 1 hour
