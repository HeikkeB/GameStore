<?php
/**
 * Plugin Name: Gamestore General
 * Description: Core code for GameStore
 * Version: 1.0
 * Author: Heikke
 * Author URI: https://github.com/HeikkeB
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function gamestore_remove_dashboard_widgets(){
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    
}
add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_widgets');
