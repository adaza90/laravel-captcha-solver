<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class FunCaptchaProxyless extends Capmonster implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websitePublicKey;

    private $funcaptchaApiJSSubdomain;

    private $data;

    public function getPostData()
    {
        return [
            'type' => 'NoCaptchaTask',
            'websiteURL' => $this->websiteUrl,
            'websitePublicKey' => $this->websitePublicKey,
            'funcaptchaApiJSSubdomain' => $this->funcaptchaApiJSSubdomain,
            'data' => $this->data,
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

    public function setWebsitePublicKey($value)
    {
        $this->websitePublicKey = $value;
    }

    public function setFuncaptchaApiJSSubdomain($value)
    {
        $this->funcaptchaApiJSSubdomain = $value;
    }

    public function setData($value)
    {
        $this->data = $value;
    }
}
