@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            @if(auth()->user()->role_name == 'Admin')
                <div class="row">
                    <a class="col-xl-3 col-sm-6 col-6 d-flex" href="{{ route('user.index') }}">
                        <div class="card bg-common w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Users</h6>
                                        <h3>{{ $users }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <i class="fas fa-users fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection