<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {
        $AuthUser = Auth::user();

        if($request->date) {
            $filterDate = $request->date;
        } else {
            $filterDate = date('Y-m-d');
        }


        $amountTasks = Task::whereDate('startDate', $filterDate)->get();

        $tasks = $amountTasks->take(6);
        $countTask = $tasks->count();
        $countCompleted = $tasks->where('completed', true)->count();
        $percentageTasksCompleted = $this->percentageCompleted($amountTasks);

        return view('home', [
            'tasks' => $tasks, 
            'AuthUser' => $AuthUser,
            'countTask' => $countTask,
            'countCompleted' => $countCompleted,
            'percentageTasksCompleted' => $percentageTasksCompleted
        ]);
    }

    private function percentageCompleted($tasks){
        $totalTask = $tasks->count();
        $totalCompleted = $tasks->where('completed', true)->count();
        $percentageCompleted = ($totalCompleted / $totalTask) * 100;
        return $percentageCompleted;
    }
}
