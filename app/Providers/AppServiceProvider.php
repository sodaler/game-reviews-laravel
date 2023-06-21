<?php

namespace App\Providers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        View::share([
            'randomPosts' => Post::query()->inRandomOrder(3) ?: [],
            'lastUrl' => DB::table('posts')->whereNotNull('preview_url')->latest()->first(),
            'likedPosts' => Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(3) ?: [],
            'mostComments' => Post::withCount('comments')->orderBy('comments_count', 'DESC')->get()->take(3) ?: [],
            'lastImgs' => Post::orderBy('id', 'desc')->take(3)->get() ?: []
        ]);
        Carbon::setLocale('ru_RU');
    }
}
