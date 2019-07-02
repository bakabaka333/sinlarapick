<?php

namespace sindev\LaravelDatePicker\Facades;

use Illuminate\Support\Facades\Facade;

class DatePicker extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laravel-datepicker';
    }
}
