<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class RecaptchaV3Proxyless extends Capmonster implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $minScore;

    private $pageAction;

    public function getPostData()
    {
        return [
            'type' => 'RecaptchaV3TaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'minScore' => $this->minScore,
            'pageAction' => $this->pageAction,
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

    public function setMinScore($value)
    {
        $this->minScore = $value;
    }

    public function setPageAction($value)
    {
        $this->pageAction = $value;
    }
}
