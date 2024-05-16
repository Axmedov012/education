<?php

namespace App\Providers;

use App\Interfaces\CourceRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CourceRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       // $this->app->bind(CourceRepositoryInterface::class,CourceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
