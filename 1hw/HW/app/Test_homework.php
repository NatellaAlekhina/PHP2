<?php

namespace HW\app;

class Test_homework
{
    public function __construct(private string $a, private string $b)
    {}

    public function sendMessage(): string
    {
        return $this->a . " - " . $this->b;
    }
}