<?php
/**
 * @package MyPlugin
 */

namespace Inc\Api;

class SettingsApi
{

    public $admin_pages = array();

    function register()
    {
        if (!empty($this->admin_pages)) {
            add_action('admin_menu', [ $this, 'addAdminMenu' ]);
        }
    }

    function addPages(array $pages)
    {
        $this->admin_pages = $pages;
        return $this;
    }

    function addAdminMenu()
    {
        foreach ($this->admin_pages as $page) {
            add_menu_page($page[ 'page_title' ], $page[ 'menu_title' ], $page[ 'capability' ], $page[ 'menu_slug' ], $page[ 'callback' ], $page[ 'icon_url' ], $page[ 'position' ]);
        }
    }

}
