<?php
/**
 * @package MyPlugin
 */

namespace Inc\Base;

class BaseController
{

    public $plugin;
    public $plugin_path;
    public $plugin_url;

    function __construct()
    {

        $this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/my-plugin.php';
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));

    }

}

// define('PLUGIN', plugin_basename(__FILE__));
// define('PLUGIN_PATH', plugin_dir_path(__FILE__));
// define('PLUGIN_URL', plugin_dir_url(__FILE__));
