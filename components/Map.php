<?php namespace Uit\Yandexmap\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'uit.yandexmap::lang.component.name',
            'description' => 'uit.yandexmap::lang.component.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'geocode' => [
                'title' => 'uit.yandexmap::lang.component.addres',
                'description' => 'uit.yandexmap::lang.component.addres_description',
                'default' => '',
                'type' => 'string',
            ],
            'width' => [
                'title' => 'uit.yandexmap::lang.component.width',
                'description' => 'uit.yandexmap::lang.component.width_description',
                'default' => '300px',
                'type' => 'string',
            ],
            'height' => [
                'title' => 'uit.yandexmap::lang.component.height',
                'description' => 'uit.yandexmap::lang.component.height_description',
                'default' => '300px',
                'type' => 'string',
            ],
            'lat_long' => [
                'title' => 'uit.yandexmap::lang.component.lat_long',
                'description' => 'uit.yandexmap::lang.component.lat_long_description',
                'default' => '',
                'type' => 'string',
            ],
            'info' => [
                'title' => 'uit.yandexmap::lang.component.info',
                'description' => 'uit.yandexmap::lang.component.info_description',
                'default' => '',
                'type' => 'string',
            ],
            'zoom' => [
                'title' => 'uit.yandexmap::lang.component.scale',
                'description' => 'uit.yandexmap::lang.component.scale_description',
                'default' => '9',
                'type' => 'string',
            ],
            'field' => [
                'title' => 'uit.yandexmap::lang.component.input_name',
                'description' => 'uit.yandexmap::lang.component.input_name_description',
                'default' => 'location',
                'type' => 'string',
            ],

            'options' => [
                'title' => 'uit.yandexmap::lang.component.options',
                'description' => 'uit.yandexmap::lang.component.options_description',
                'default' => "",
                'type' => 'string',
            ],

            'load_script' => [
                'title' => 'uit.yandexmap::lang.component.load_js',
                'description' => 'uit.yandexmap::lang.component.load_js_description',
                'default' => '1',
                'type' => 'checkbox',
            ],

            'search_input' => [
                'title' => 'uit.yandexmap::lang.component.search_input',
                'description' => 'uit.yandexmap::lang.component.search_input_description',
                'default' => '1',
                'type' => 'checkbox',
            ],

        ];
    }

    public function onRun()
    {
        $this->addJs('assets/js/map.js');
        $this->addCss('assets/css/map.css');
    }

}