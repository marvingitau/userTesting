@extends('layout')

@section('cont')
    <p> Edit Page </p>
    
<form action="/project/{{ $project->id }}/update" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label class = "label" for="title"> Title</label>
            
                <input type="text" class="form-control" name="title" value="{{ $project->title }}" placeholder="Title"/>
            </div>

       

        <div class="form-group">
                <label class = "label" for="description"> Title</label>
                
                    <textarea name="description" class="form-control" > {{ $project->description }}</textarea>
    
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> &nbsp; 
    </form>

    <form action="./destroy" method="POST" role="form">
        @method('DELETE')
        @csrf
        
        <button type="submit" class="btn btn-default" > Delete</button>
@endsection
