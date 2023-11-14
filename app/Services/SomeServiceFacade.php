<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class SomeServiceFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'SomeService';
    }
}
