<?php
/**
 * @package MyPlugin
 */

namespace Inc\Base;

use Inc\Base\BaseController;

class Enqueue extends BaseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'enqueue' ]);
    }

    public function enqueue()
    {
        wp_enqueue_style('myStyles', $this->plugin_url . 'assets/css/myStyles.css');
        wp_enqueue_script('myScript', $this->plugin_url . 'assets/js/myScript.js');
    }
}
