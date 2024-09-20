<?php
/**
 * @package MyPlugin
 */

namespace Inc\Base;

class SettingsLinks
{
    public function register($name = PLUGIN)
    {
        add_filter("plugin_action_links_$name", [ $this, 'settings_link' ]);
    }

    public function settings_link($links)
    {
        $settings_link = "<a href='admin.php?page=my_plugin_page'>Settings</a>";
        array_push($links, $settings_link);
        return $links;
    }

}
