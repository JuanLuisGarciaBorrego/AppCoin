<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppCoinController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/wallet", name="wallet")
     */
    public function wallet()
    {
        return $this->render('wallet.html.twig');
    }

    /**
     * @Route("/save", name="save")
     */
    public function save()
    {
        return $this->redirectToRoute('wallet');
    }
}