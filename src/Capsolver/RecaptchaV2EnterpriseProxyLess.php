<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class RecaptchaV2EnterpriseProxyLess extends Capsolver implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $pageAction;

    private $enterprisePayload;

    private $isInvisible = false;

    private $apiDomain;

    private $userAgent = '';

    private $cookies = '';

    public function getPostData()
    {
        return [
            'type' => 'ReCaptchaV2EnterpriseTaskProxyLess',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'pageAction' => $this->pageAction,
            'enterprisePayload' => $this->enterprisePayload,
            'isInvisible' => $this->isInvisible,
            'apiDomain' => $this->apiDomain,
            'userAgent' => $this->userAgent,
            'cookies' => $this->cookies,
        ];
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

    public function setPageAction($value)
    {
        $this->pageAction = $value;
    }

    public function setEnterprisePayload($value)
    {
        $this->enterprisePayload = $value;
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
