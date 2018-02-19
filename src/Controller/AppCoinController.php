<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppCoinController extends Controller
{
    public function homepage()
    {
        return $this->render('homepage.html.twig');
    }
}