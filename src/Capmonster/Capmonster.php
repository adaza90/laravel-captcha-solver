<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaSolver;

class Capmonster extends CaptchaSolver
{
    public function __construct()
    {
        parent::setHost('api.capmonster.cloud');
    }
}
