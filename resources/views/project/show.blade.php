@extends('layout')
@section('cont')
  {{-- <bold>County area</bold> --}}
  <h1> {{ $inchi-> title }} </h1>

  <div class="content"> {{ $inchi->description }} <br>
  <a href="../{{ $inchi->id }}/edit" class="btn btn-info" role="button">Edit</a>
    </div>

  @if($inchi->tasks->count())
  <div >
    @foreach($inchi->tasks as $task)

    <form class="" method="POST" action="../../tasks/{{ $task->id }}">
      @method("PATCH")
      @csrf
      
        <div class="form-check " >
            
            <input type="checkbox" class="form-check-input" name="completed" id="exampleCheck1" onChange="this.form.submit();" {{$task->completed? 'checked' : ''}}>
            <label class="form-check-label {{$task->completed? 'isComplete' : ''}} " for="exampleCheck1"> {{ $task->description }}</label>
            
        </div>
    </form>
     
    @endforeach

  </div>
  @endif

  {{-- create task form --}}

  <form class="jumbotron mt-2" method="POST" action="../{{ $inchi->id}}/task" >
    @csrf
    <div class="form-group">
      <label for="newTask"></label>
      <input type="text" class="form-control"id="newTask" name="description" placeholder="new tast"/>
      <input type="hidden" name= "idValue" value="{{$inchi->id }}"/>
      {{-- <a href=""  class="btn btn-info" role="button">New Task</a> --}}
      <button class="btn btn-info" role="button">Submit</button>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        
        <li>{{ $error }}</li>
            
        @endforeach
        </ul>

    </div>
    @endif
    
  </form>

  {{-- <input type="button" class="btb btn-info" href="./{{ $inchi->id }}/edit"  value="edit"/> --}}
  
  


@endsection