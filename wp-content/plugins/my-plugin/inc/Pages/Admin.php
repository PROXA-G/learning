<?php
/**
 * @package MyPlugin
 */

namespace Inc\Pages;

class Admin
{
    public function register($name = PLUGIN)
    {
        // This is a action for adding the Page in the Admin_Menu
        add_action('admin_menu', [ $this, 'add_admin_pages' ]);

        add_filter("plugin_action_links_$name", [ $this, 'settings_link' ]);

    }

    public function settings_link($links)
    {
        $settings_link = "<a href='admin.php?page=my_plugin_page'>Settings</a>";
        array_push($links, $settings_link);
        return $links;
    }

    public function add_admin_pages()
    {
        // We are adding the pages using this "add_menu_page" section
        add_menu_page('My Plugin Page', 'MyPlugin', 'manage_options', 'my_plugin_page', [ $this, 'admin_index' ], 'dashicons-store', 110);
    }

    public function admin_index()
    {
        require_once PLUGIN_PATH . 'templates\admin.php';
    }

}
