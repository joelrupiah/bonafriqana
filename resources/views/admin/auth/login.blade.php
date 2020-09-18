@extends('admin.admin_layout')

@section('admin_content')

<div id="layoutAuthentication" class="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-admin-login">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header card-login-header"><h3 class="text-center font-weight-light my-4 admin-login-header">Admin Login</h3></div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('admin.auth.login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="password">Password</label>
                                        <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input custom-control-input" type="checkbox" name="remember" 
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small small-admin" href="{{ route('admin.password.request') }}">Forgot Password?</a>
                                        <button type="submit" class="btn btn-primary admin-login">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
    
@endsection