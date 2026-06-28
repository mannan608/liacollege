@extends('backend.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name <span class="login-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- insert defaults --}}
                                <input type="hidden" class="image" name="image" value="photo_defaults.png">
                                <div class="form-group ">
                                    <label>Select Course <span class="login-danger">*</span></label>
                                    <select id="courses" name="courses[]" multiple data-placeholder=" ">
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">
                                                {{ $course->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input type="password"
                                        class="form-control pass-input  @error('password') is-invalid @enderror"
                                        name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label>Confirm password <span class="login-danger">*</span></label>
                                    <input type="password"
                                        class="form-control pass-confirm @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" required>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Add New Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        width: 100% !important;
        vertical-align: middle;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        margin-top: 10px;
    }

    .selected-item {
        position: relative;
        padding-right: 24px !important;
    }

    .selected-item .remove-btn {
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .login-danger {
        color: red;
    }

    .login-wrapper .loginbox .login-right .login-right-wrap .form-group label {
        z-index: 9;
    }
</style>
