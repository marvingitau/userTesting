<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        
        //dd(Request());

        // $pro = Projects::all();
        // return view('project.index',compact('pro')); 
       
        $users = DB::table('projects')->where('title','=','S.Africa')->get();
        dd($users->all(),$users->get('0'),$users->all()[0]->title);
        // return view('project.index', ['users' => $users]);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store()
    {
        // $pro = new Projects();

        // $pro->title = request('title');
        // $pro->description = request('description');
        // $pro->save();
        // THE CODE ABOVE CAN BE REP BY BELOW
        $succ= request()->validate([
            'title'=> ['required' ,'min:3'],
            'description' => ['required' ,'min:3']  // => this used here for conditions
        ]);

        //return $succ;
        Projects::create($succ);

        // Projects::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        //dd($pro);

         return redirect('project/');
    }

    public function show($id)
    {
        
        $inchi = Projects::findOrFail($id);
       // return $inchi
        return view('project.show',compact('inchi'));
        
    }


    public function update($id)
    {
    
        $project = Projects::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
       // return response('update pg');
       //return view('project.update');
       //dd(request()->all());
       return redirect('project/');
    }

    public function edit ($id)
    {
        //return $id;
        $project = Projects::findOrFail($id);

        //return response('edit page');
        return view('project.edit',compact('project'));
    }

    public function destroy ($id)
    {
        Projects::findOrFail($id)->delete();

        return redirect('../');
        
    }

    
   

   
}
