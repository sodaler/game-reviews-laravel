<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportGameData
{
    public $client;

    /**
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://free-to-play-games-database.p.rapidapi.com/api/games',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'verify' => false,
        ]);
    }

}
