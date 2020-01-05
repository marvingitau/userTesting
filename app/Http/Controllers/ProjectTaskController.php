<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Projects;
class ProjectTaskController extends Controller
{
   
     public function update(Task $task)
    {
        //dd(Task::all());
        //dd(request()->all());
        //dd(request()->has("completed"));
        $id=request('id');
        $task->where('id',$id)
             ->update([
                    "completed" => request()->has("completed")
                ]);

        return back();
       // dd(request()->has('completed'));
    }

    public function store(Task $task,Projects $project)
    {
        $attrbute = request()->validate(['description'=>['required' ,'max:255'] ]);

        Task::create(['projects_id' => request('idValue'),
            'description' => $attrbute['description']
            ]);

        // $project->addTask(request('description'));
        return back();
      // $id=$task->all()[0]->projects_id;

        //dd( request('idValue') );
        dd($attrbute);
    }
}
