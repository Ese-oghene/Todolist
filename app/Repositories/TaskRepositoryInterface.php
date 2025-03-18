<?php

namespace App\Repositories;

use App\Models\Task;

interface TaskRepositoryInterface
{
    public function getAllTasks();
    public function getTaskById($id);
    public function createTask(array $data);
    public function updateTask(Task $task, array $data);
    public function deleteTask(Task $task);
}
