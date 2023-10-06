<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{

    private Map $map;
    private Satellite $satellite;

    public function __construct(Map $map , Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $name) :array
    {
        return $this->satellite->pinPoint($this->map->findAddress($name));
    }
}
