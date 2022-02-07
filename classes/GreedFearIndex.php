<?php

namespace CNTRX;

use Goutte\Client;

class GreedFearIndex
{
    public static function scrapeCurrentGreadFearIndex() {
        $client = new Client();
        $crawler = $client->request('GET', 'https://alternative.me/crypto/fear-and-greed-index/');
    
        return $crawler->filter('.fng-value .fng-circle')->text();
    }
}