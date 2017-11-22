<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.aside', function ($view){
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->get();

            // $view->with('archives', $archives );
            // $view->with('tags', $tags );

            $view->with(compact(['archives', 'tags']));
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
