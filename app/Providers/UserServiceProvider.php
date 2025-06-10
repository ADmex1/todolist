<?php

namespace App\Providers;
use App\Services\UserService;
use App\Services\Impl\UserServiceImplement;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public $singletons = [
        UserService::class => UserServiceImplement::class
    ];
    public function provides(): array{
        return [UserService::class];
    }
    public function register()
    {
        //
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
