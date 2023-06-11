<?php

namespace LaravelCaptchaSolver\Anycaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class FunCaptchaProxyless extends Anycaptcha implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websitePublicKey;

    public function getPostData()
    {
        return [
            'type' => 'FunCaptchaTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websitePublicKey' => $this->websitePublicKey,
        ];
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->token;
    }

    public function setWebsiteURL($value)
    {
        $this->websiteUrl = $value;
    }

    public function setWebsitePublicKey($value)
    {
        $this->websitePublicKey = $value;
    }
}
