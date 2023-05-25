<?php 

// Check PHP version.

use PSpell\Config;

$minimumPhpVersion = '8'; // If you update this, don't forget to update `dragon`.
if (version_compare(PHP_VERSION, $minimumPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minimumPhpVersion,
        PHP_VERSION
    );

    exit($message);
}

// define Path to the front Controller ( this file )
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

chdir(FCPATH);
// Load our path configs file
require FCPATH . '../app/Config/Paths.php';
// change line if you want to your application folder  

$paths = new dragon\Config\Paths();

// Location of the Framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

var_dump(APPPATH);