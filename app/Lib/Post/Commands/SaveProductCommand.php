<?php

namespace App\Lib\Post\Commands;

use App\Lib\Patterns\Command\Command;
use App\Models\Post;

class SaveProductCommand extends Command
{
    public function execute()
    {
        $product = new Post();
        return $product->create($this->data);
    }
}