<?php

namespace LaravelCaptchaSolver;

interface CaptchaTaskProtocol
{
    public function getPostData();

    public function getTaskSolution();
}
