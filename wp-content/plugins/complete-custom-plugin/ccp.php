<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Complete Custom Plugin
 * Description:       Customize the Tab of Woocommerce and add custom field in it.
 * Version:           1.0.0
 * Author:            Satyam Bajpai
 * Text Domain:       cfp
 */


// Enqueue your script
function enqueue_custom_script()
{
    // Register the script
    wp_register_script('custom-script', plugins_url('/js/custom-script.js', __FILE__), array('jquery'), '1.0', true);

    // Localize script for Ajax
    wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

    // Enqueue the script
    wp_enqueue_script('custom-script');
}

// // Hook into WordPress
add_action('wp_enqueue_scripts', 'enqueue_custom_script');