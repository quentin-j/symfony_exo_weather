<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

      /**
     * @Route("/montagnes", name="mountains")
     */
    public function mountains(): Response
    {
        return $this->render('main/mountains.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

      /**
     * @Route("/plage, name="beachs")
     */
    public function beachs(): Response
    {
        return $this->render('main/beachs.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
