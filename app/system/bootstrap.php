<?php

use Config\Paths;

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */



/*
 * ---------------------------------------------------------------
 * SETUP OUR PATH CONSTANTS
 * ---------------------------------------------------------------
 *
 * The path constants provide convenient access to the folders
 * throughout the application. We have to setup them up here
 * so they are available in the config files that are loaded.
 */

// The path to the application directory.
if (!defined('APPPATH')) {
    /**
     * @var Paths $paths
     */
    define('APPPATH', realpath(rtrim($paths->appDirectory, '\\/')) . DIRECTORY_SEPARATOR);
}
// The path to the project root directory. Just Above APPPATH.
if (!defined('ROOTPATH')) {
    /**
     * @var Paths $paths
     */
    define('ROOTPATH', realpath(APPPATH . '../') . DIRECTORY_SEPARATOR);
}

// The path to system directory 
if (!defined('SYSTEMPATH')) {
    /**
     * @var Paths $paths
     */
    define('SYSTEMPATH', realpath(rtrim($paths->systemDirectory)) . DIRECTORY_SEPARATOR);
}

// The path to the writable directory.
if (!defined('WRITEPATH')) {
    /**
     * @var Paths $paths
     */
    define('WRITEPATH', realpath(rtrim($paths->writableDirectory, '\\/')) . DIRECTORY_SEPARATOR);
}

// The Path to tests directory.
if (!defined('TESTPATH')) {
    /**
     * @var Paths $paths
     */
    define('TESTPATH', realpath(rtrim($paths->testsDirectory, '\\/')) . DIRECTORY_SEPARATOR);
}

/*
 * ---------------------------------------------------------------
 * GRAB OUR CONSTANTS & COMMON
 * ---------------------------------------------------------------
 */

if(!defined('APP_NAMESPACE')){
    require_once APPPATH . 'Config/Common.php';
}

// Require app/Common.php file if exists
if(is_file(APPPATH . 'Common.php')){
    require_once APPPATH . 'Common.php';
}

// Require system/Common.php
require_once SYSTEMPATH . 'Common.php';