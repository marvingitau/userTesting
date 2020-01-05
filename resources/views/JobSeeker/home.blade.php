@extends('layout')

@section('cont')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">JobSeeker ~ Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   JS is logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection