@extends('layout')

@section('cont')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card usrs">
                <div class="card-header"> SuperAdmin ~ Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  {{-- @foreach ($users as $user) --}}
                      {{-- <dl>
                          <dt>Name</dt> 
                          <dd>
                            {{ $user->name }}
                          </dd>
                          <dt>Role</dt>
                          <dd>
                              @if($user->status==1){
                               echo Admin
                              }@endif
                              @if($user->status==2){
                                KMRC
                              }@endif
                              @if($user->status==3){
                                HR
                              }@endif
                              @if($user->status==4){
                                JobSeeker
                              }@endif
                              
                          </dd>
                          
                      </dl> --}}
                      
                      <table class="" style="width:100%">
                        
                        <tr>
                          <th>Name</th>
                          <th>Role</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                        <td><a href="/editUser/{{ $user->id }}">{{ $user->name }}</a></td>
                          <td>
                            @if($user->status==1)
                                Admin
                            @endif
                            @if($user->status==2)
                                 KMRC
                            @endif  
                            @if($user->status==3)
                                 3rdParty/HR
                            @endif
                            @if($user->status==4)
                                 JobSeeker
                            @endif
                          </td>
                          
                        </tr>
                        @endforeach
                      </table> 
                    </form>
                      {{-- {{ $user->name }} <br> --}}
                  {{-- @endforeach --}}
                </div>
            </div>
            <button class="btn btn-link" href="#" >Add New Usr</button>
        </div>
    </div>
</div>

@endsection