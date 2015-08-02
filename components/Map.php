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
                'default'     => '',
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
                'default'     => '',
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
            'field'=>[
                'title'       => 'Имя скрытого инпута',
                'description' => 'Скрыты инпут',
                'default'     => 'location',
                'type'        => 'string',
            ],

            'options'=>[
                'title'       => 'Дополнительные опции',
                'description' => 'Пример:  controls: [\'zoomControl\', \'fullscreenControl\']',
                'default'     => "",
                'type'        => 'string',
            ],

            'load_script' => [
                'title'       => 'Добавить скрипт яндекса',
                'description' => 'Масштаб карты',
                'default'     => '1',
                'type'        => 'checkbox',
            ],

            'search_input' => [
                'title'       => 'Показать поиск по карте',
                'description' => 'Добавляет форму поиска на карту',
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