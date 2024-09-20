<?php
/**
 * @package MyPlugin
 */

/*
Plugin Name: My Plugin
Plugin URI: http://youtube.com/plugin
Description: A simple plugin for learning WordPress development.
Version: 1.0.0
Author: Hamza Waqar
Author URI: http://hamzawaqar.com
License: GPL-2.0+
Text Domain: my-plugin
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, see <http://www.gnu.org/licenses/>.
 */

if (!defined('ABSPATH')) {
    die;
}
if (!class_exists('MyPlugin')) {
    class MyPlugin
    {
        public $name;

        public function __construct()
        {
            $this->name = plugin_basename(__FILE__);
        }

        public function register()
        {
            add_action('admin_enqueue_scripts', [ $this, 'enqueue' ]);

            // This is a action for adding the Page in the Admin_Menu
            add_action('admin_menu', [ $this, 'add_admin_pages' ]);

            add_filter("plugin_action_links_$this->name", [ $this, 'settings_link' ]);
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
            add_menu_page('My Plugin Page', 'MyPlugin', 'manage_options', 'my_plugin_page', [ $this, 'admin_page_template' ], 'dashicons-store', 110);
        }

        public function admin_page_template()
        {
            require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
            // Here we will require the PAGE from Templates
        }

        protected function create_post_type()
        {
            add_action('init', [ $this, 'custom_post_type' ]);
        }

        public function activate()
        {
            require_once plugin_dir_path(__FILE__) . 'inc/my-plugin-activate.php';
            MyPluginActivate::activate();
        }

        public function deactivate()
        {
            require_once plugin_dir_path(__FILE__) . 'inc/my-plugin-deactivate.php';
            MyPluginDeactivate::deactivate();
        }

        public function custom_post_type()
        {
            register_post_type('book', [ 'public' => true, 'label' => 'Books' ]);
        }

        public function enqueue()
        {
            wp_enqueue_style('myStyles', plugins_url('/assets/css/myStyles.css', __FILE__));
            wp_enqueue_script('myScript', plugins_url('/assets/js/myScript.js', __FILE__));
        }
    }

    $myPlugin = new MyPlugin();
    $myPlugin->register();

    register_activation_hook(__FILE__, [ $myPlugin, 'activate' ]);
    register_deactivation_hook(__FILE__, [ $myPlugin, 'deactivate' ]);

}
