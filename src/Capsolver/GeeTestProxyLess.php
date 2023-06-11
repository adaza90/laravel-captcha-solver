<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class GeeTestProxyLess extends Capsolver implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $challenge;

    private $geetestApiServerSubdomain;

    private $captchaId;

    public function getPostData()
    {
        return [
            'type' => 'GeeTestTaskProxyLess',
            'websiteURL' => $this->websiteUrl,
            'gt' => $this->websiteKey,
            'challenge' => $this->challenge,
            'captchaId' => $this->captchaId,
            'geetestApiServerSubdomain' => $this->geetestApiServerSubdomain,
        ];
    }

    public function setTaskInfo($taskInfo)
    {
        $this->taskInfo = $taskInfo;
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution;
    }

    public function setWebsiteURL($value)
    {
        $this->websiteUrl = $value;
    }

    public function setGTKey($value)
    {
        $this->websiteKey = $value;
    }

    public function setChallenge($value)
    {
        $this->challenge = $value;
    }

    public function setCaptchaId($value)
    {
        $this->captchaId = $value;
    }

    public function setAPISubdomain($value)
    {
        $this->geetestApiServerSubdomain = $value;
    }
}
