<?php

namespace Krimt\UniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     */
    protected static function getFacadeAccessor()
    {
        return 'unique-slug';
    }
}
