<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Sejarah;
use App\Berita;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $sejarah = Sejarah::all()->first;
        $widget_berita_latest = Berita::orderBy('updated_at', 'desc')->take(3)->get();
        $widget_berita_random = Berita::inRandomOrder()->take(2)->get();
        View::share('sejarah',$sejarah->deskripsi);
        view::share('widget_berita_latest', $widget_berita_latest);
        view::share('widget_berita_random', $widget_berita_random);
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
