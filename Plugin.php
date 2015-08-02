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
            'name'        => 'uit.yandexmap::lang.plugin.name',
            'description' => 'uit.yandexmap::lang.plugin.description',
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
