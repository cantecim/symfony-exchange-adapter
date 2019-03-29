<?php


namespace App\Exchange\Market;


class BMarketAdapter extends BMarket implements Market
{
    const KOD_TO_SYMBOL = [
        'DOLAR' => 'USDTRY',
        'AVRO' => 'EURTRY',
        'İNGİLİZ STERLİNİ' => 'GBPTRY',
    ];

    public function json()
    {
        $json = $this->uncompleted_json();
        foreach ($json as $i => $v) {
            $json[$i] = [
                'symbol' => self::KOD_TO_SYMBOL[$v['kod']],
                'amount' => floatval($v['oran'])
            ];
        }
        return $json;
    }

}