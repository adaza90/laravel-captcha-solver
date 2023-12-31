<?php

namespace LaravelCaptchaSolver\Anticaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class GeeTestProxyless extends Anticaptcha implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $websiteChallenge;

    private $geetestApiServerSubdomain;

    public function getPostData()
    {
        $set = [
            'type' => 'GeeTestTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'geetestApiServerSubdomain' => $this->geetestApiServerSubdomain,
            'gt' => $this->websiteKey,
            'challenge' => $this->websiteChallenge,
        ];

        return $set;
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
        $this->websiteChallenge = $value;
    }

    public function setAPISubdomain($value)
    {
        $this->geetestApiServerSubdomain = $value;
    }
}
