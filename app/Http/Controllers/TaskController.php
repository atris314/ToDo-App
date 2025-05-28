<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $taskRepo;
    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Task::create(['title' => $request->title]);
        return redirect()->back();
    }
}
