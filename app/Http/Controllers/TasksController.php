<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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

    public function add(Request $request)
    {
        /*I check if the mandatory fields are filled*/
        if ($request->filled(['task-title', 'category_id'])) {
            /*and if they have the good format (integer, string)*/
            $this->validate($request, [
            'task-title' =>'required|string',
            'category_id' =>'required|int'
            ]);
            /*I create my object $newTask*/
            $newTask = new Task();
            /*I pick-up the mandatory parameters*/
            $title = $request->input('task-title');
            $category_id=$request->input('category_id');
            /*I put them in my new object*/
            $newTask->title = $title;
            $newTask->category_id = $category_id;
            /*I save in the DB the new object and return the message*/
            if ($newTask->save()) {
            /*When I save I return on the route 'formtasks' with the key status and a message 'Task created'*/
            return redirect('formtasks')->with('status', 'Task created!');

            }else{ /*if I can't save*/
                return redirect('formtasks')->with('alert', 'Error');
            }
            //TODO manage the optionnel properties
        }


    }
}
