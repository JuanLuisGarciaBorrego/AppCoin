<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="wallet")
 */
class Wallet
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     */
    private $ico;

    /**
     * @ORM\Column(type="integer")
     */
    private $currentValue;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getIco(): string
    {
        return $this->ico;
    }

    public function setIco(string $ico)
    {
        $this->ico = $ico;
    }

    public function getCurrentValue(): int
    {
        return $this->currentValue;
    }

    public function setCurrentValue(string $currentValue)
    {
        $this->currentValue = $currentValue;
    }
}