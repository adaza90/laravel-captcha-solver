<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class HCaptchaProxyless extends Capmonster implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $isInvisible = false;

    private $data;

    private $cookies = '';

    public function getPostData()
    {
        return [
            'type' => 'HCaptchaTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'websiteKey' => $this->websiteKey,
            'isInvisible' => $this->isInvisible,
            'data' => $this->data,
            'cookies' => $this->cookies,
        ];
    }

    public function setTaskInfo($taskInfo)
    {
        $this->taskInfo = $taskInfo;
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->token;
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

    public function setData($value)
    {
        $this->data = $value;
    }

    public function setCookies($value)
    {
        $this->cookies = $value;
    }
}
