## Installation

### Composer

Run the command:
``` bash
$ composer require adaza90/laravel-captcha-solver
```

Or 

Add laravel-captcha-solver in your composer.json or create a new composer.json:

```js
{
    "require": {
        "adaza90/laravel-captcha-solver": "~1"
    }
}
```

Now tell composer to download the library by running the command:

``` bash
$ php composer.phar install
```

Composer will generate the autoloader file automatically. So you only have to include this.
Typically its located in the vendor dir and its called autoload.php

Then publish config file by running the command:
``` bash
$ php artisan vendor:publish --tag=captchasolver
```


## Basic Usage:

Set API key in config/captchasolver.php or .env file.

``` php
<?php

return [
	'anti_captcha_api_key' => env('ANTI_CAPTCHA_API_KEY', ''),
    'any_captcha_api_key' => env('ANY_CAPTCHA_API_KEY', ''),
    'cap_monster_api_key' => env('CAP_MONSTER_API_KEY', ''),
    'cap_solver_api_key' => env('CAP_SOLVER_API_KEY', ''),
];
```


Dependency Injection example.

``` php
use LaravelCaptchaSolver\Exceptions\CaptchaSolverException;
use LaravelCaptchaSolver\Anticaptcha\NoCaptchaProxyless;

public function handle( NoCaptchaProxyless $no_captcha_proxyless ) {
    $no_captcha_proxyless->setVerboseMode(false);
    $no_captcha_proxyless->setWebsiteURL( 'https://targetdomain.com' );
    $no_captcha_proxyless->setWebsiteKey( 'recaptcha_site_key' );
    $no_captcha_proxyless->createTask();
    $taskId = $no_captcha_proxyless->getTaskId();
    $no_captcha_proxyless->waitForResult();
    dump($no_captcha_proxyless->getTaskSolution());
}

```
