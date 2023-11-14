<?php

namespace App\Services;

class SomeService
{
    public function __construct(protected string $test) {
        
    }
    public function someMethod()
    {
        dd('test facade ' . $this->test);
    }
}
