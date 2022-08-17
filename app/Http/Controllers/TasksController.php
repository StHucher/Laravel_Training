<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public function list()
    {
        $tasksList = Task::all();

        return view('tasksList', ['tasks'=>$tasksList]);

    }

    public function item($id)
    {
        $taskItem = Task::find($id);

        return view('taskItem', ['Items' => $taskItem]);
    }

    public function form()
    {
        return view('formTasks',[]);
    }
}
