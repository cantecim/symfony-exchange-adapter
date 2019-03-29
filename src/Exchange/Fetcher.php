<?php


namespace App\Exchange;


use App\Entity\Rate;
use App\Exchange\Market\AMarket;
use App\Exchange\Market\BMarketAdapter;
use Doctrine\ORM\EntityManagerInterface;

class Fetcher
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    const MARKETS = [
        AMarket::class => 'http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0',
        BMarketAdapter::class => 'http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3'
    ];

    public function fetch()
    {
        foreach (self::MARKETS as $c => $url) {
            $c = new $c($url);
            $result = $c->json();

            foreach ($result as $r) {
                $rate = new Rate();
                $rate->setMarketName($c->identifier);
                $rate->setSymbol($r['symbol']);
                $rate->setRate($r['amount']);
                $rate->setPublishedAt(new \DateTime());
                $rate->setPublishedDate($rate->getPublishedAt());

                $this->entityManager->persist($rate);
                $this->entityManager->flush();
            }
        }
    }

}