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
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
       /**
     * @Route("/mountain", name="mountain")
     */
    public function montain(): Response
    {
        return $this->render('main/mountain.html.twig');
    }
       /**
     * @Route("/beach", name="beach")
     */
    public function beach(): Response
    {
        return $this->render('main/beach.html.twig');
    }
}
