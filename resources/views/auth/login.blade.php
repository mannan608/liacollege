@extends('auth.auth-layout')
@section('content')
    <div class="login-right">
        <div class="login-right-wrap">            
            <h1>Welcome to {{ optional($setting)->name ?? 'Our College' }}</h1>
            <p class="account-subtitle">Need an account? <a href="{{ route('register') }}">Sign Up</a></p>
            <h2>Sign in</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email<span class="login-danger">*</span></label>
                    <input type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror"
                        name="email">
                    @error('email')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group position-relative">
                    <label>Password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror"
                        placeholder="Enter Password" name="password">
                    <span class="profile-views feather-eye"><i class="toggle-password" data-feather="eye"></i></span>
                    @error('password')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
            </form>
            @error('role')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
@endsection
