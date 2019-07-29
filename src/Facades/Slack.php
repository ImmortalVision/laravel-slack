<?php

namespace ImmortalVision\LaravelSlack\Facades;

use Illuminate\Support\Facades\Facade;

class Slack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Maknz\Slack\Client';
    }
}