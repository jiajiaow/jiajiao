<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.partials.sidebar','App\Http\ViewComposers\MenuComposer'
        );
        //导航查询
        $yiji = \DB::table('jjw_yiji')->get();
        $erji = \DB::table('jjw_erji')->get();
        $sanji = \DB::table('jjw_sanji')->get();

        view()->share(array('yiji'=>$yiji,'erji'=>$erji,'sanji'=>$sanji));
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
