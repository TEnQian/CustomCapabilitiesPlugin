<?php
/**
 * Plugin Name:       Custom role capabilities plugin
 * Plugin URI:        https://imagint.co
 * Description:       Enable 'unfiltered_html' capabilities for shop manager.
 * Version:           1.0
 * Author:            Imagint
 * Author URI:        https://imagint.co
 * License:           GPLv2 (or later)
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */


function change_role_cap() {
    // Retrieve the  Author role.
    $role = get_role('shop_manager');
    $role->add_cap('unfiltered_html');
}
add_action( 'admin_init', 'change_role_cap');
