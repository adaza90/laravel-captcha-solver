<?php

namespace LaravelCaptchaSolver\Capsolver;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class ImageToText extends Capsolver implements CaptchaTaskProtocol
{
    private $body;

    private $module;

    private $case;

    private $score;

    public function getPostData()
    {
        $postData = [
            'type' => 'ImageToTextTask',
            'body' => str_replace("\n", '', $this->body),
        ];

        if ($this->module) {
            $postData['module'] = $this->module;
        }

        if ($this->case) {
            $postData['case'] = $this->case;
        }

        if ($this->score) {
            $postData['score'] = $this->score;
        }

        return $postData;
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->text;
    }

    public function setModule($value)
    {
        $this->module = $value;
    }

    public function setBody($value)
    {
        $this->body = $value;
    }

    public function setCase($value)
    {
        $this->case = $value;
    }

    public function setScore($value)
    {
        $this->score = $value;
    }
}
