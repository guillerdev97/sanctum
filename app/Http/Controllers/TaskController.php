<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return response()->json($tasks, 200);
    }

    public function destroy($id) {
        $task = Task::find($id);

        $task->delete();

        return response()->json([
            'message' => 'Task has been delete'
        ], 200);
    }

    public function store(Request $request) {
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Task stored done',
            'task' => $task
        ], 200);
    }
}
