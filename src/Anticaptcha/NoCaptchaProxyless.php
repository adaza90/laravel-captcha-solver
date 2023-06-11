<?php

namespace LaravelCaptchaSolver\Anticaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class NoCaptchaProxyless extends Anticaptcha implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $websiteSToken;

    public function getPostData()
    {
        return [
            'type' => 'NoCaptchaTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'websiteSToken' => $this->websiteSToken,
        ];
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->gRecaptchaResponse;
    }

    public function setWebsiteURL($value)
    {
        $this->websiteUrl = $value;
    }

    public function setWebsiteKey($value)
    {
        $this->websiteKey = $value;
    }

    public function setWebsiteSToken($value)
    {
        $this->websiteSToken = $value;
    }
}
