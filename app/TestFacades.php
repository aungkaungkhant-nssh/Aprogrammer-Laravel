<?php
namespace App;


use Illuminate\Support\Facades\Facade;

class TestFacades extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}