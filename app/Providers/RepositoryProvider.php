<?php

namespace App\Providers;

use App\Repositories\Contract\TestRepository;
use App\Repositories\TestRepositoryEloquent;
use App\Service\Contract\IExample;
use App\Service\ExampleService;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IExample::class, ExampleService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TestRepository::class, TestRepositoryEloquent::class);
    }
}
