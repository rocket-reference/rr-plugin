<?php
    /*
    Plugin Name: Rocket Reference Plugin
    Plugin URI: 
    Description: Provides all of the functionality for the Rocket Reference website to utilize better backend setups for an encyclopedia style reference site.
    Version: 1.0.0
    Author: Dan Paplaczyk
    Author URI:
    License: MIT
    License URI: 
    */

    // Get the absolute path of the directory
    define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
    require_once MY_PLUGIN_PATH . 'includes/rr-engine-post-type.php';
    require_once MY_PLUGIN_PATH . 'includes/rr-launch-vehicle-post-type.php';
    require_once MY_PLUGIN_PATH . 'includes/rr-stage-post-type.php';
    require_once MY_PLUGIN_PATH . 'includes/rr-propellants-post-type.php';

?>