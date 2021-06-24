<?php
/*

Plugin Name: Capetrel WP RGPD

Description: Plugin d'intégration du service open source Tarteaucitron dans Wordpress pour se conformer à la législation sur les cookies et le RGPD.

Version: 1.2.0

Author: capetrel

License: MIT

*/

function plugin_add_settings_link($links)
{
    $settings_link = '<a href="admin.php?page=tac-admin-menu">' . __('Settings') . '</a>';
    $documentationlink = '<a href="https://github.com/AmauriC/tarteaucitron.js" target="_blank">' . __('Documentation') . '</a>';
    array_unshift($links, $documentationlink);
    array_unshift($links, $settings_link);
    return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'plugin_add_settings_link');

# include necessary files
require_once plugin_dir_path(__FILE__) . 'src/Admin/Tac_admin_languages.php';
require_once plugin_dir_path(__FILE__) . 'src/Admin/Tac_admin_scripts.php';
require_once plugin_dir_path(__FILE__) . 'src/Admin/Tac_admin_services.php';
require_once plugin_dir_path(__FILE__) . 'src/Admin/TacAdmin.php';
require_once plugin_dir_path(__FILE__) . 'src/Front/TacFrontend.php';

# initiate the instances
TacAdmin::init();
TacFrontend::init();
