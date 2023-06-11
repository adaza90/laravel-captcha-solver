<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class GeeTestProxyless extends Capmonster implements CaptchaTaskProtocol
{
    private $websiteUrl;

    private $websiteKey;

    private $websiteChallenge;

    private $geetestApiServerSubdomain;

    private $geetestGetLib;

    private $version = 3;

    private $initParameters;

    public function getPostData()
    {
        return [
            'type' => 'GeeTestTaskProxyless',
            'websiteURL' => $this->websiteUrl,
            'gt' => $this->websiteKey,
            'challenge' => $this->websiteChallenge,
            'geetestApiServerSubdomain' => $this->geetestApiServerSubdomain,
            'geetestGetLib' => $this->geetestGetLib,
            'version' => $this->version,
            'initParameters' => $this->initParameters,
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
        $this->websiteChallenge = $value;
    }

    public function setAPISubdomain($value)
    {
        $this->geetestApiServerSubdomain = $value;
    }

    public function setGeetestGetLib($value)
    {
        $this->geetestGetLib = $value;
    }

    public function setVersion($value)
    {
        $this->version = $value;
    }

    public function setInitParameters($value)
    {
        $this->initParameters = $value;
    }
}
