<?php

namespace App\Controller;


use App\Data\Coins;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppCoinController extends Controller
{
    private $coins;

    public function __construct(Coins $coins)
    {
        $this->coins = $coins;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('homepage.html.twig', [
            'coin' => $this->coins->getOneRandom()
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