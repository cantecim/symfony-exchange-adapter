<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RateRepository")
 */
class Rate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $market_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $symbol;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=5)
     */
    private $rate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published_at;

    /**
     * @ORM\Column(type="date")
     */
    private $published_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarketName(): ?string
    {
        return $this->market_name;
    }

    public function setMarketName(string $market_name): self
    {
        $this->market_name = $market_name;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->published_at;
    }

    public function setPublishedAt(\DateTimeInterface $published_at): self
    {
        $this->published_at = $published_at;

        return $this;
    }

    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->published_date;
    }

    public function setPublishedDate(\DateTimeInterface $published_date): self
    {
        $this->published_date = $published_date;

        return $this;
    }
}
