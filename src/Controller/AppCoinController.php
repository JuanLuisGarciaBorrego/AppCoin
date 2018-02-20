<?php

namespace App\Controller;


use App\Data\Coins;
use App\Entity\Wallet;
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
        return $this->render('wallet.html.twig', [
            'coins' => $this->getDoctrine()->getRepository(Wallet::class)->findAll()
        ]);
    }

    /**
     * @Route("/save/{key}/{currentValue}/", name="save")
     */
    public function save($key, $currentValue)
    {
        $coin = $this->coins->getOneByArrayKey($key);

        $wallet = new Wallet();
        $wallet->setType($coin['type']);
        $wallet->setIco($coin['ico']);
        $wallet->setCurrentValue($currentValue);

        $em = $this->getDoctrine()->getManager();
        $em->persist($wallet);

        $em->flush();

        return $this->redirectToRoute('wallet');
    }
}