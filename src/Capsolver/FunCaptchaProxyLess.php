<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class FunCaptchaProxyLess extends Capsolver implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websitePublicKey;

    private $funcaptchaApiJSSubdomain;

    private $data;

    private $proxy;

    public function getPostData()
    {
        return [
            'type' => 'FunCaptchaTaskProxyLess',
            'websiteURL' => $this->websiteUrl,
            'websitePublicKey' => $this->websitePublicKey,
            'funcaptchaApiJSSubdomain' => $this->funcaptchaApiJSSubdomain,
            'data' => $this->data,
            'proxy' => $this->proxy,
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

    public function setProxy($value)
    {
        $this->proxy = $value;
    }
}
