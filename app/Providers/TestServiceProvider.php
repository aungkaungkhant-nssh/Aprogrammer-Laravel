<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Test;
class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind("test",function(){
            return new Test();
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
