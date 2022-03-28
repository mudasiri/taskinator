<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function store(Request $request){

        $this->validate($request, [
            'description'=>'required'
        ]);

        Task::create(
            [
                'description' => $request->description,
                'status' => 'pending'
            ]
        );

        return back();
    }

    public function update(Task $task){

        $task->update(['status' => 'Completed']);
       /* Task::update(
            [
                'status' => 'Completed'
            ]
        );*/

        return back();
    }

    public function destroy(Task $task){

        $task->delete();

        return back();
    }
}
