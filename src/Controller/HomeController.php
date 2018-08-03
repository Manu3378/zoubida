<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="homes")
     */
    public function index()
    {
        return $this->render('offline/signup.html.twig');
       
    }
}
