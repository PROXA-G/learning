<?php
/**
 * @package MyPlugin
 */

namespace Inc\Pages;

use Inc\Base\BaseController;

class Admin extends BaseController
{
    public function register()
    {
        // This is a action for adding the Page in the Admin_Menu
        add_action('admin_menu', [ $this, 'add_admin_pages' ]);

    }

    public function add_admin_pages()
    {
        // We are adding the pages using this "add_menu_page" section
        add_menu_page('My Plugin Page', 'MyPlugin', 'manage_options', 'my_plugin_page', [ $this, 'admin_index' ], 'dashicons-store', 110);
    }

    public function admin_index()
    {
        require_once $this->plugin_path . 'templates\admin.php';
    }

}
