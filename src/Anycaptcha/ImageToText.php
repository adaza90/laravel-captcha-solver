<?php

namespace LaravelCaptchaSolver\Anycaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class ImageToText extends Anycaptcha implements CaptchaTaskProtocol
{
    private $body;

    private $subType;

    public function getPostData()
    {
        $postData = [
            'type' => 'ImageToTextTask',
            'body' => str_replace("\n", '', $this->body),
        ];

        if ($this->subType) {
            $postData['subType'] = $this->subType;
        }

        return $postData;
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->text;
    }

    public function setSubType($value)
    {
        $this->subType = $value;
    }

    public function setBody($value)
    {
        $this->body = $value;
    }
}
