<?php


namespace App\Exchange\Market;


class AMarket extends AbstractMarket implements Market
{
    public $identifier = "Market A";

    public function json()
    {
        $body = $this->fetch();
        // body is a correct json string, simply return it
        return json_decode($body, true)['result'];
    }
}