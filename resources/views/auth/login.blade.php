@include('user.partials.pagesheader')
@include('user.partials.shop.shopmainheader')

<!-- LOGIN FORM -->
<div id="layoutAuthentication" class="layoutAuthentication mb-5">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-admin-login">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header card-login-header"><h3 class="text-center font-weight-light my-4 admin-login-header">Sign In</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Email or Phone</label>
                                        <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}"  autofocus>
                                        
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
                                        <a class="small small-admin" href="{{ route('password.request') }}">Forgot Password?</a>
                                        <button type="submit" class="btn btn-primary admin-login">
                                            Sign In
                                        </button>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-facebook-square">    
                                                Login with Facebook</i>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-danger">
                                            <i class="fa fa-google-plus-square">    
                                                Login with Google</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('register') }}" class="small small-admin">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>

<!--END LOGIN FORM  -->


<!--SIGN UP FORM  -->

                    <div class="col-lg-6 col-admin-login">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header card-login-header"><h3 class="text-center font-weight-light my-4 admin-login-header">Sign Up</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Full Name</label>
                                        <input id="name" type="text" class="form-control py-4 @error('name') is-invalid @enderror" 
                                        name="name" value="{{ old('name') }}"  autofocus>
                                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}"  autofocus>
                                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Phone</label>
                                        <input id="phone" type="text" class="form-control py-4 @error('phone') is-invalid @enderror" 
                                        name="phone" value="{{ old('phone') }}"  autofocus>
                                        
                                            @error('phone')
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
                                        <label for="password-confirm" class="small mb-1">Confirm Password</label>
            
                                            <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password">
                                        
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary admin-login">
                                            Sign Up
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('register') }}" class="small small-admin">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>

<!--END SIGN UP FORM  -->

                </div>
            </div>
        </main>
    </div>
    
</div>

@include('user.partials.footer')
