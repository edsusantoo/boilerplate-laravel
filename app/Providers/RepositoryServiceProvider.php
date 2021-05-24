<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImpl;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepository::class, 
            UserRepositoryImpl::class,
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
