<?php namespace Uit\YandexMap;

use System\Classes\PluginBase;

/**
 * YandexMap Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'YandexMap',
            'description' => 'No description provided yet...',
            'author'      => 'uit',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Uit\YandexMap\Components\Map'   => 'map',
        ];
    }

}
