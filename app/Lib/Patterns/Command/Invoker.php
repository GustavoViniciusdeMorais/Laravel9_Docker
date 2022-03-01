<?php

namespace App\Lib\Patterns\Command;

use Exception;

class Invoker
{
    private $command;

    public function setCommand($command)
    {
        $this->command = $command;
    }

    public function executeCommand($data = null)
    {
        try {
            $this->command->withData($data);
            return $this->command->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
}