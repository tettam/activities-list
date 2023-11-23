<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function view() {

    }

    public function create(Request $request) {
        $data = [];
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('tasks.create', $data);
    }

    public function edit(Request $request) {
        $id = $request->id;
        $findId = Task::find($id);
        $categories = Category::all();

        if (!$findId) {
            return redirect(route('home'));
        }

        $data['task'] = $findId;
        $data['categories'] = $categories;
        return view('tasks.edit', $data);
        
    }

    public function edit_action(Request $request) {
        $requestData = $request->only(['title','completedDate','category_id','description']);
        $task = Task::find($request->id);

        if(!$task) return 'Erro de task não existente';
        $requestData['completed'] = $request->completed ? true : false;
        $task->update($requestData);
        $task->save();
        return redirect(route('home'));
    }

    public function delete(Request $request) {
        $task = Task::find($request->id);
        if(!$task) return redirect(route('home'));
        $task->delete();
        return redirect(route('home'));
    }

    public function create_action(Request $request) {
        $task = $request->only('title', 'category_id', 'description', 'completedDate');
        $task['user_id'] = 1;
        $task['startDate'] = '2025/11/02';
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function update(Request $request) {
        $task = Task::findOrFail($request->taskId);
        $task->completed = $request->status;
        $task->save();
        return ['success' => true];
    }
}