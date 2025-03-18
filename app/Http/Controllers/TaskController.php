<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Repositories\TaskRepositoryInterface;

class TaskController extends Controller
{
    /**
     * Display a listing of the task.
     */
     protected $taskRepository;

     public function __construct(TaskRepositoryInterface $taskRepository)
     {
         $this->taskRepository = $taskRepository;
     }

       /**
         * Show all task task.
         */
    public function index()
    {
        return response()->json($this->taskRepository->getAllTasks());
    }

    /**
     * Store a newly created task in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = $this->taskRepository->createTask($request->all());
        return response()->json($task, 201);
    }

    /**
     * Display the specified task.
     */
    public function show($id)
    {
        return response()->json($this->taskRepository->getTaskById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task = $this->taskRepository->updateTask($task, $request->all());
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $this->taskRepository->deleteTask($task);
        return response()->json(null, 204);
    }
}
