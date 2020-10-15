<?php namespace Sunveloper\TeeplussThemes\Facades;

use Illuminate\Support\Facades\Facade;

class Asset extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'assets';
    }
}
