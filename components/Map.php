<?php namespace Uit\Yandexmap\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Map Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'geocode' => [
                'title'       => 'Адрес',
                'description' => 'Адрес',
                'default'     => 'Астана',
                'type'        => 'string',
            ],
            'width' => [
                'title'       => 'Ширина карты',
                'description' => 'Ширина карты',
                'default'     => '300px',
                'type'        => 'string',
            ],
            'height' => [
                'title'       => 'Высота карты',
                'description' => 'Высота карты',
                'default'     => '300px',
                'type'        => 'string',
            ],
            'lat_long' => [
                'title'       => 'Широта,долгота',
                'description' => 'Широта,долгота не объязательно',
                'default'     => '55.753994, 37.622093',
                'type'        => 'string',
            ],
            'info' => [
                'title'       => 'Текст',
                'description' => 'Текст на карте',
                'default'     => '',
                'type'        => 'string',
            ],
            'zoom' => [
                'title'       => 'Масштаб',
                'description' => 'Масштаб карты',
                'default'     => '9',
                'type'        => 'string',
            ],

            'load_script' => [
                'title'       => 'Добавить скрипт яндекса',
                'description' => 'Масштаб карты',
                'default'     => '1',
                'type'        => 'checkbox',
            ],

        ];
    }

    public function onRun()
    {
        $this->addCss('assets/css/map.css');




    }

}