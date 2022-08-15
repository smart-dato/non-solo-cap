<?php

namespace SmartDato\NonSoloCap\Facades;

use Illuminate\Support\Facades\Facade;

class NonSoloCap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'non-solo-cap';
    }
}
