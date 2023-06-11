<?php

namespace LaravelCaptchaSolver\Capmonster;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class ImageToText extends Capmonster implements CaptchaTaskProtocol
{
    private $body;

    private $capMonsterModule;

    private $recognizingThreshold;

    private $case;

    private $numeric;

    private $math;

    public function getPostData()
    {
        $postData = [
            'type' => 'ImageToTextTask',
            'body' => str_replace("\n", '', $this->body),
        ];

        if ($this->capMonsterModule) {
            $postData['CapMonsterModule'] = $this->capMonsterModule;
        }

        if ($this->recognizingThreshold) {
            $postData['recognizingThreshold'] = $this->recognizingThreshold;
        }

        if ($this->case) {
            $postData['Case'] = $this->case;
        }

        if ($this->numeric) {
            $postData['numeric'] = $this->numeric;
        }

        if ($this->math) {
            $postData['math'] = $this->math;
        }

        return $postData;
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->text;
    }

    public function setCapMonsterModule($value)
    {
        $this->capMonsterModule = $value;
    }

    public function setBody($value)
    {
        $this->body = $value;
    }

    public function setRecognizingThreshold($value)
    {
        $this->recognizingThreshold = $value;
    }

    public function setCase($value)
    {
        $this->case = $value;
    }

    public function setNumeric($value)
    {
        $this->numeric = $value;
    }

    public function setMath($value)
    {
        $this->math = $value;
    }
}
