<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\HangSanXuat;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('clientStore.layout.header' , function($view){
            $hangsanxuat = HangSanXuat::all();
            $view->with('hangsanxuat',$hangsanxuat);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
