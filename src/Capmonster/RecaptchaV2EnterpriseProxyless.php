<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class RecaptchaV2EnterpriseProxyless extends Capmonster implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $enterprisePayload;

    private $apiDomain;

    public function getPostData()
    {
        return [
            'type' => 'RecaptchaV2EnterpriseTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'enterprisePayload' => $this->enterprisePayload,
            'apiDomain' => $this->apiDomain,
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

    public function setEnterprisePayload($value)
    {
        $this->enterprisePayload = $value;
    }

    public function setApiDomain($value)
    {
        $this->apiDomain = $value;
    }
}
