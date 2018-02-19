<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class AppCoinController
{
    public function homepage()
    {
        return new Response('Hello world');
    }
}