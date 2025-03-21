<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getEmployees()
    {
        return response()->json(Employee::all());
    }

    public function getTasks()
    {
        $tasks = Task::with('employee')->get();
        return response()->json($tasks);
    }

    public function createTask(Request $request)
    {
        $request->validate([
            'employees_id' => 'required|exists:employees,id',
            'task_name' => 'required|string',
            'due_date' => 'required|date',
        ]);

        $task = Task::create([
            'employees_id' => $request->employees_id,
            'task_name' => $request->task_name,
            'due_date' => $request->due_date,
        ]);

        return response()->json([
            'message' => 'Task added successfully',
            'data' => $task
        ], 201);
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
