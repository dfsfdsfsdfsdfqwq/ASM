<?php
// src/Controller/AboutUsController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     */
    public function home(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('aboutus/home.html.twig');
    }
}
