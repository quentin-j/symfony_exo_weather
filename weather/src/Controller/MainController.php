<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\WeatherModel;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        $weatherList = WeatherModel::getWeatherData() ;
        return $this->render('main/homepage.html.twig', [
            'weather_list' => $weatherList,
        ]);
    }

     /**
     * @Route("/montagnes", name="mountain")
     */
    public function mountain(): Response
    {
        return $this->render('main/mountain.html.twig');
    }

     /**
     * @Route("/plage", name="beach")
     */
    public function beach(): Response
    {
        return $this->render('main/beach.html.twig');
    }
}
