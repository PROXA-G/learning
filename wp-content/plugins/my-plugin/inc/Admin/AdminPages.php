<?php
namespace Inc\Admin;

class AdminPages
{

    public static function test()
    {
        wp_die('Class is working');
    }

    public static function register($name)
    {
        // This is a action for adding the Page in the Admin_Menu
        add_action('admin_menu', [ 'Inc\Admin\AdminPages', 'add_admin_pages' ]);

        add_filter("plugin_action_links_$name", [ 'Inc\Admin\AdminPages', 'settings_link' ]);

    }

    public static function settings_link($links)
    {
        $settings_link = "<a href='admin.php?page=my_plugin_page'>Settings</a>";
        array_push($links, $settings_link);
        return $links;
    }

    public static function add_admin_pages()
    {
        // We are adding the pages using this "add_menu_page" section
        add_menu_page('My Plugin Page', 'MyPlugin', 'manage_options', 'my_plugin_page', [ 'Inc\Admin\AdminPages', 'admin_page_template' ], 'dashicons-store', 110);
    }

    public static function admin_page_template()
    {
        require_once 'C:\xampp\htdocs\--server--\learning\wp-content\plugins\my-plugin\templates\admin.php';
    }

}
