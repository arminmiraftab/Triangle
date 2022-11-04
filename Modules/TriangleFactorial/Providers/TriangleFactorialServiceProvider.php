<?php

namespace Modules\TriangleFactorial\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TriangleFactorialServiceProvider extends ServiceProvider
{
    protected $moduleNamespace='Modules\TriangleFactorial\Http\Controllers';

    public function boot(){
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views/','Factorial');

    }
}
