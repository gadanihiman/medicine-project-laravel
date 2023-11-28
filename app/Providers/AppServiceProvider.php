<?php

namespace App\Providers;

use App\Repositories\MedicineOutgoingRepository;
use App\Repositories\MedicineOutgoingRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MedicineOutgoingRepositoryInterface::class, MedicineOutgoingRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
