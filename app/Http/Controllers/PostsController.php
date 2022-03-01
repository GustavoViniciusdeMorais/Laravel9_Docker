<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\Post\PostInvoker;
use App\Http\Requests\StorePostRequest;
use App\Lib\Post\Commands\SaveProductCommand;
use App\Lib\Post\Commands\GetPostCommand;

class PostsController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $invoker = new PostInvoker();
        $command = new SaveProductCommand();
        $invoker->setCommand($command);
        return $invoker->executeCommand($data);
    }

    public function index()
    {
        $invoker = new PostInvoker();
        $command = new GetPostCommand();
        $invoker->setCommand($command);
        return $invoker->executeCommand();
    }
}
