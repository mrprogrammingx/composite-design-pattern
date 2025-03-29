<?php

namespace App\Providers;

use App\Services\Form;
use App\Contracts\FormElementInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FormElementInterface::class, fn() => new Form('product', 'Add product', '/product/add'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
