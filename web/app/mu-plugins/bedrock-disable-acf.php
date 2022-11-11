<?php
/**
 * Plugin Name:  Disable ACF
 * Plugin URI:   https://redpin.com.au
 * Description:  In production disable Advanced custom field editing.
 * Version:      1.0.3
 * Author:       Redpin Design
 * Author URI:   https://redpin.com.au/
 * License:      MIT License
 */

namespace Roots\Bedrock;


if (defined('WP_ENV') && WP_ENV == 'production') {
    add_filter('acf/settings/show_admin', '__return_false');
}