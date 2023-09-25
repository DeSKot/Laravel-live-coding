<?php

namespace App\Providers;

use App\Interfaces\ReviewRepositoryInterface;
use App\Repositories\EloquentReviewRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ReviewRepositoryInterface::class, EloquentReviewRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
