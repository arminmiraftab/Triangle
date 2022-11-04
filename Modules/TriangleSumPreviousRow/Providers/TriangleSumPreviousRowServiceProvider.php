<?php

namespace Modules\TriangleSumPreviousRow\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TriangleSumPreviousRowServiceProvider extends ServiceProvider
{
    protected $moduleNamespace='Modules\TriangleSumPreviousRow\Http\Controllers';
//    protected $moduleNameLower = 'trianglesumpreviousRow';

    public function boot(){
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(__DIR__.'/../Routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../Resources/Views/','Sum');
    }
}
