<?php
/**
 * @package MyPlugin
 */

namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'enqueue' ]);
    }

    public function enqueue()
    {
        wp_enqueue_style('myStyles', PLUGIN_URL . 'assets/css/myStyles.css');
        wp_enqueue_script('myScript', PLUGIN_URL . 'assets/js/myScript.js');
    }
}
