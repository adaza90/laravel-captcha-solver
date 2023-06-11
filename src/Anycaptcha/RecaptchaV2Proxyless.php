<?php

namespace LaravelCaptchaSolver\Anycaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class RecaptchaV2Proxyless extends Anycaptcha implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $isInvisible = false;

    public function getPostData()
    {
        return [
            'type' => 'RecaptchaV2TaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'isInvisible' => $this->isInvisible,
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

    public function setIsInvisible($value)
    {
        $this->isInvisible = $value;
    }
}
