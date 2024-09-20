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

if (file_exists(dirname(__FILE__) . './vendor/autoload.php')) {
    require_once dirname(__FILE__) . './vendor/autoload.php';
}

define('PLUGIN', plugin_basename(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function ActivateMyPlugin()
{
    Activate::activate();
}

function DeactivateMyPlugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'ActivateMyPlugin');
register_deactivation_hook(__FILE__, 'DeactivateMyPlugin');

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
