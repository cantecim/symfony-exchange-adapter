<?php


namespace App\Exchange\Market;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

abstract class AbstractMarket
{
    public $identifier;

    protected $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    protected function fetch(): string
    {
        $client = new Client([
            'timeout' => 20
        ]);
        $response = $client->get($this->url);
        $body = (string)$response->getBody();

        return $body;
    }

}