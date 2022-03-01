<?php

namespace App\Lib\Post\Commands;

use App\Lib\Patterns\Command\Command;
use App\Models\Post;

class GetPostCommand extends Command
{
    public function execute()
    {
        return Post::all();
    }
}