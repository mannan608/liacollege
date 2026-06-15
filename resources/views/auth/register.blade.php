@extends('auth.auth-layout')


@section('content')
    <div class="login-right">
        <div class="login-right-wrap">
            <h1>Sign Up</h1>
            <p class="account-subtitle">Enter details to create your account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                </div>
                <div class="form-group">
                    <label>Phone <span class="login-danger">*</span></label>
                    <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Email <span class="login-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
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
                    <input type="password" class="form-control pass-input  @error('password') is-invalid @enderror"
                        name="password" required>
                    <span class="profile-views feather-eye"><i class="toggle-password" data-feather="eye"></i></span>
                </div>
                <div class="form-group">
                    <label>Confirm password <span class="login-danger">*</span></label>
                    <input type="password"
                        class="form-control pass-confirm @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" required>
                    <span class="profile-views reg-feather-eye"><i class="reg-toggle-password"
                            data-feather="eye"></i></span>
                </div>
                <div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
            </form>
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
