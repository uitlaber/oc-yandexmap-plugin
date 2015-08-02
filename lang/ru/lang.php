<?php
/**
 * Created by PhpStorm.
 * User: UIT
 * Date: 02.08.2015
 * Time: 13:54
 */

return [
    'plugin' => [
        'name' => 'Яндекс карта',
        'description' => 'Плагин для вывода карты яндекс',
        'tab' => 'Яндекс карта',

    ],
    'component'=>[
        'name' =>'Яндекс Карты',
        'description' => 'Компанент для вывода карты яндекс',
        'addres' => 'Адресс',
        'addres_description' => 'Напишите адресс которую хотите вывести на карте',
        'width'=> 'Ширина карты',
        'width_description'=> 'Пример: 100%',
        'height'=> 'Высота карты',
        'height_description'=> 'Пример: 200px',
        'lat_long'=> 'Широта и долгота',
        'lat_long_description'=> 'Пример: 51.149238, 71.471493',
        'info'=> 'Текст на метке',
        'info_description'=> 'Пример: Я тут родился',
        'scale'=> 'Масштаб',
        'scale_description'=> 'Масштаб 1:Мелко, 9:Средне, 16:Крупно  ',
        'input_name'=> 'Имя скрытого инпута',
        'input_name_description'=> 'Если вы хотите использовать карту внутри формы',
        'options'=> 'Дополнительные опции',
        'load_js'=> 'Добавить скрипт от яндекса',
        'load_js_description'=> 'Если вы используете несколько карт на странице то достаточно одного скрипта',
        'search_input'=> 'Форма поиска',
        'search_input_description'=> 'Форма поиска по адресу',
    ]


];