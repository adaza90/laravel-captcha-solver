<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class RecaptchaV2 extends Capsolver implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $proxy;

    private $pageAction;

    private $isInvisible = false;

    private $apiDomain;

    private $userAgent = '';

    private $cookies = '';

    public function getPostData()
    {
        $postData = [
            'type' => 'ReCaptchaV2Task',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'proxy' => $this->proxy,
            'isInvisible' => $this->isInvisible,
        ];

        if ($this->pageAction) {
            $postData['pageAction'] = $this->pageAction;
        }
        
        if ($this->apiDomain) {
            $postData['apiDomain'] = $this->apiDomain;
        }

        if ($this->userAgent) {
            $postData['userAgent'] = $this->userAgent;
        }

        if ($this->cookies) {
            $postData['cookies'] = $this->cookies;
        }

        return $postData;
    }

    public function setTaskInfo($taskInfo)
    {
        $this->taskInfo = $taskInfo;
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

    public function setProxy($value)
    {
        $this->proxy = $value;
    }

    public function setPageAction($value)
    {
        $this->pageAction = $value;
    }

    public function setIsInvisible($value)
    {
        $this->isInvisible = $value;
    }

    public function setApiDomain($value)
    {
        $this->apiDomain = $value;
    }

    public function setUserAgent($value)
    {
        $this->userAgent = $value;
    }

    public function setCookies($value)
    {
        $this->cookies = $value;
    }
}
