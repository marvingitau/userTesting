@extends('layout')

@section('cont')

 {{-- we use request in controller to fetch the form data --}}
<form method="POST" action="/project/store" autocomplete="off">
    {{ csrf_field() }}
    <div class="form-group">
    <label class="label" for="title"></label>
    <input type="text" class="form-control"  name="title" id="title"  placeholder="enter the name" value="{{ old('title')}}"/><br>
    </div>

    <div class="form-group">
    <label class="label" for="description">Description Area</label>
    <textarea class = "form-control" name="description" id="description" >{{ old('description') }}</textarea>
    </div>
 
    <button class="btn btn-info">Submit</button>
  
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


@endsection

