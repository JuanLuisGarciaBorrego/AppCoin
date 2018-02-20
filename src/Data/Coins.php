<?php

namespace App\Data;

class Coins
{
    public function getOneRandom()
    {
        $totalCoins = count($this->getAll()) -1;

        $key = mt_rand(0, $totalCoins);

        $coin = $this->getAll()[$key];

        return [
            'key' => $key,
            'type' => $coin['type'],
            'ico'  => $coin['ico'],
            'minValue'  => $coin['min-value'],
            'maxValue'  => $coin['max-value'],
            'currentValue' => mt_rand($coin['min-value'], $coin['max-value'])
        ];
    }

    public function getOneByArrayKey($key)
    {
        if(!array_key_exists($key, $this->getAll())) {
            throw new \Exception('OOps!! array key not exists');
        }

        return $this->getAll()[$key];
    }

    public function getAll()
    {
        return [
            [
                'type'      => 'Bitcoin',
                'ico'       => 'bitcoin.png',
                'min-value' => 400,
                'max-value' => 600,
            ],
            [
                'type'      => 'Litecoin',
                'ico'       => 'litecoin.png',
                'min-value' => 2,
                'max-value' => 5,
            ],
            [
                'type'      => 'Primecoin',
                'ico'       => 'primecoin.png',
                'min-value' => 1,
                'max-value' => 3,
            ],
            [
                'type'      => 'Namecoin',
                'ico'       => 'namecoin.png',
                'min-value' => 0,
                'max-value' => 10,
            ],
            [
                'type'      => 'Ripple',
                'ico'       => 'ripple.png',
                'min-value' => 30,
                'max-value' => 55,
            ],
            [
                'type'      => 'Dogecoin',
                'ico'       => 'dogecoin.png',
                'min-value' => 20,
                'max-value' => 23,
            ],
            [
                'type'      => 'Ethereum',
                'ico'       => 'ethereum.png',
                'min-value' => 11,
                'max-value' => 98,
            ],
            [
                'type'      => 'Dash',
                'ico'       => 'dash.png',
                'min-value' => 201,
                'max-value' => 231,
            ],
        ];
    }
}