<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaSolver;

class Capsolver extends CaptchaSolver
{
    private $hosts = ['api.capsolver.com', 'api-stable.capsolver.com'];

    public function __construct($host)
    {
        parent::setHost($this->hosts[$host]);
    }
}
