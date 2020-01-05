<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable=[
        'title',
        'description'
    ];
   // protected $guarded = [];

    public function tasks()
    {
        return $this -> hasMany(Task::class);
    }

    public function addTask($description)
    {
        // THE WHOLE OF THIS METHOD HAVE ANA ERROR DUE TO LACK OF INTANCES
       // $this->tasks()->create(['description' =>$description]);

        // return Task::create([
        //     'projects_id' => $this->id,
        //     'description' =>$description
        //     ]);
    }
}
