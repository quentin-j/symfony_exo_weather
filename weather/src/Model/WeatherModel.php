<?php

namespace App\Model;

class WeatherModel
{
    public static function getWeatherData()
    {
        return self::$weatherData;
    }

    public static function getWeatherByCityIndex($index)
    {
        if (!isset(self::$weatherData[$index])) {
            return false;
        }

        return self::$weatherData[$index];
    }

    private static $weatherData = [
        [
            'city' => 'Annecy',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 8,
        ],
    
        [
            'city' => 'Biarritz',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => -1,
            'max' => 6,
        ],
    
        [
            'city' => 'Bordeaux',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 12,
        ],
    
        [
            'city' => 'Bruxelles',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => 0,
            'max' => 7,
        ],
    
        [
            'city' => 'Chambéry',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => -1,
            'max' => 7,
        ],
    
        [
            'city' => 'Grenoble',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => -4,
            'max' => 6,
        ],
    
        [
            'city' => 'Lille',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 12,
        ],
    
        [
            'city' => 'Lyon',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => -4,
            'max' => 5,
        ],
    
        [
            'city' => 'Marseille',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => 5,
            'max' => 11,
        ],
    
        [
            'city' => 'Metz',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => -2,
            'max' => 7,
        ],
    
        [
            'city' => 'Montpellier',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => 2,
            'max' => 9,
        ],
    
        [
            'city' => 'Nantes',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => 0,
            'max' => 9,
        ],
    
        [
            'city' => 'Nice',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => -5,
            'max' => 3,
        ],
    
        [
            'city' => 'Paris',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => -4,
            'max' => 1,
        ],
    
        [
            'city' => 'Rouen',
            'weather' => 'rain',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 12,
        ],
    
        [
            'city' => 'Toulouse',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => -4,
            'max' => 5,
        ],
    ];
}
