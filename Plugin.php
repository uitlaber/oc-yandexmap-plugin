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
            'description' => 'Yandex Map component',
            'author'      => 'uit',
            'icon'        => 'icon-map-marker'
        ];
    }

    public function registerComponents()
    {
        return [
            'Uit\YandexMap\Components\Map'   => 'map',
        ];
    }

}
