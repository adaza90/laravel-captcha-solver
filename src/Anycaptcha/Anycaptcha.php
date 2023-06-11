<?php

namespace LaravelCaptchaSolver\Anycaptcha;

use LaravelCaptchaSolver\CaptchaSolver;

class Anycaptcha extends CaptchaSolver
{
    public function __construct()
    {
        parent::setHost('api.anycaptcha.com');
    }
}
