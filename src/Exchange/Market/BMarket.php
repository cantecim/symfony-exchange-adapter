<?php


namespace App\Exchange\Market;


class BMarket extends AbstractMarket
{
    public $identifier = "Market B";

    public function uncompleted_json()
    {
        $body = $this->fetch();
        // body is a json string, we should normalize it.
        return json_decode($body, true);
    }

}