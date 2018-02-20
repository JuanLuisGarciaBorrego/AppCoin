<?php

namespace App\Controller;


use App\Data\Coins;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppCoinController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(Coins $coins)
    {
        return $this->render('homepage.html.twig', [
            'coin' => $coins->getOneRandom()
        ]);
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