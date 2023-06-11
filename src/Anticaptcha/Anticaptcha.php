<?php

namespace LaravelCaptchaSolver\Anticaptcha;

use LaravelCaptchaSolver\CaptchaSolver;

class Anticaptcha extends CaptchaSolver
{
    public function __construct()
    {
        parent::setHost('api.anti-captcha.com');
    }
}
