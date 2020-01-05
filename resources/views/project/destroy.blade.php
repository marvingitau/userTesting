@extends('layout')

@section('cont')

$id = $_GET({{ $project->id }}) ?? '';
dd($id)

@endsection