<?php

namespace App\Lib\Patterns\Command;

abstract class Command
{
    public $data;
    abstract public function execute();
    public function withData($data)
    {
        $this->data = $data;
    }
}