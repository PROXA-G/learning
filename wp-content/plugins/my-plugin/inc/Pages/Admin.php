<?php
/**
 * @package MyPlugin
 */

namespace Inc\Pages;

use Inc\Api\SettingsApi;

class Admin
{

    public $settings;

    public $pages = array();

    function __construct()
    {
        $this->settings = new SettingsApi;

        $this->pages = [
            [
                'page_title' => 'My Plugin Page',
                'menu_title' => 'MyPlugin',
                'capability' => 'manage_options',
                'menu_slug' => 'my_plugin_page',
                'callback' => function () {echo '<h1>Wake up to the reality!</h1>';},
                'icon_url' => 'dashicons-store',
                'position' => 110,
             ],
         ];
    }

    public function register()
    {
        $this->settings->addPages($this->pages)->register();
    }

}
