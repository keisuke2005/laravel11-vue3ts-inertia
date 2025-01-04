<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\SampleServiceInterface;
use App\Services\Implementations\SampleService;
use App\Repositories\Contracts\SampleRepositoryInterface;
use App\Repositories\Implementations\SampleRepository;

class SampleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SampleServiceInterface::class,SampleService::class);
        $this->app->bind(SampleRepositoryInterface::class,SampleRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
