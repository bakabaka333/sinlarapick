<?php

namespace sindev\LaravelDatePicker;

use Illuminate\Support\ServiceProvider;

class DatePickerServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-datepicker', function ($app) {
            return $app->make('sindev\LaravelDatePicker\DatePicker');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/', 'datepicker');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-datepicker'];
    }
}
