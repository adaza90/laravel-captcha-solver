<?php

namespace LaravelCaptchaSolver\Anticaptcha;

use LaravelCaptchaSolver\CaptchaTaskProtocol;

class CustomCaptcha extends Anticaptcha implements CaptchaTaskProtocol
{
    private $imageUrl;

    private $assignment;

    private $forms;

    public function getPostData()
    {
        return [
            'type' => 'CustomCaptchaTask',
            'imageUrl' => $this->imageUrl,
            'assignment' => $this->assignment,
            'forms' => $this->forms,
        ];
    }

    public function getTaskSolution()
    {
        return $this->taskInfo->solution->answers;
    }

    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }

    public function setAssignment($value)
    {
        $this->assignment = $value;
    }

    public function setForms($value)
    {
        if (is_array($value)) {
            $this->forms = $value;

            return true;
        } else {
            $this->debout('form must be of type array', 'red');

            return false;
        }
    }
}
