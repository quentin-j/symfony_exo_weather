<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\WeatherModel;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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

    /**
     * @Route("/select/city/{id}", name="select_city")
     */
    public function selectCity($id, SessionInterface $session): Response
    {

        // enregistrer la ville sélectionnée en session
        $session->set('city_id', $id);

        $selectedCity = WeatherModel::getWeatherByCityIndex($id);
        $session->set('selected_city', $selectedCity);


        // rediriger vers la liste des bulletings météos
        return $this->redirectToRoute('homepage');
    }
}
