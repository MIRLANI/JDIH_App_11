<?php

namespace App\Providers;

use App\Services\Impl\PeraturanServiceImpl;
use App\Services\PeraturanService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PeraturanServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        PeraturanService::class => PeraturanServiceImpl::class
    ];

    public function provides()
    {
        return [
            PeraturanService::class
        ];
    }

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
