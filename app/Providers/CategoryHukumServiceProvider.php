<?php

namespace App\Providers;

use App\Services\CategoryHukumService;
use App\Services\Impl\CategoryHukumServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class CategoryHukumServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        CategoryHukumService::class => CategoryHukumServiceImpl::class,
    ];

    public function provides(): array
    {
        return [
            CategoryHukumService::class,
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
