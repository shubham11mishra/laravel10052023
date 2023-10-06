<?php

namespace App\Services;

use App\Services\Geolocation\Geolocation;

class Playground
{

    public function __construct(Geolocation $geolocation)
    {
       $a =  $geolocation->search('asd');
       dump($a);
    }
}
