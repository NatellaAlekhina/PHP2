<?php

namespace HW\app_homework;

class Test_homework_new
{
    public function __construct(private string $a, private string $b)
    {}

    public function sendMessage(): string
    {
        return $this->a . " * " . $this->b;
    }
}