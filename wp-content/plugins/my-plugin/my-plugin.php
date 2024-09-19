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

class MyPlugin
{

    public function __construct()
    {
        add_action('init', [ $this, 'custom_post_type' ]);
    }

    public function activate()
    {

        $this->custom_post_type();
        flush_rewrite_rules();

    }

    public function deactivate()
    {
        // flush_rewrite_rules();
    }

    public function uninstall()
    {

    }

    public function custom_post_type()
    {
        register_post_type('book', [ 'public' => true, 'label' => 'Books' ]);
    }
}

if (class_exists('MyPlugin')) {
    $myPlugin = new MyPlugin();
}

register_activation_hook(__FILE__, [ $myPlugin, 'activate' ]);
register_deactivation_hook(__FILE__, [ $myPlugin, 'deactivate' ]);
