@extends('layout')
@section('cont')
    <h1> Projects </h1>
    <?php
    // echo $_SERVER['SCRIPT_FILENAME'];
    //echo __DIR__;
    ?>
    <ul>
        @foreach ($pro as $item)
        <li>
            <a href="/project/{{ $item->id }}/show">
                {{ $item->description }}  
            </a>
        </li>
        @endforeach
    </ul>
   {{-- @foreach ($users as $user)
   {{ $user }} 
   @endforeach --}}
   {{-- {{ $users }}  --}}

@endsection