<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function view() {

    }

    public function create(Request $request) {
        return view('tasks.create');
    }

    public function edit(Request $request) {
        return view('tasks.edit');
    }

    public function delete(Request $request) {
        return redirect(route('home'));
    }
}