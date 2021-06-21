<?php
/*
    ce fichier sert à re-générer les données du tableau de WeatherModel
*/
$cities = [
    'Annecy',
    'Biarritz',
    'Bordeaux',
    'Bruxelles',
    'Chambéry',
    'Grenoble',
    'Lille',
    'Lyon',
    'Marseille',
    'Metz',
    'Montpellier',
    'Nantes',
    'Nice',
    'Paris',
    'Rouen',
    'Toulouse',
];

$weathers = [
    'clouds',
    'rain',
    'shower',
    'storm',
    'snow',
    'sun-cloud',
    'sun',
];

$output = '';

foreach ($cities as $city) {

    $weather = $weathers[mt_rand(0, count($weathers) - 1)];
    
    $min = mt_rand(-5, +5);
    $max = $min + mt_rand(5, 10);

    $output .= "
        [
            'city' => '$city',
            'weather' => '$weather',
            'date' => '29-01-2020',
            'min' => $min,
            'max' => $max,
        ],
    ";
}

header('Content-Type: text/plain; charset=utf-8');

echo $output;