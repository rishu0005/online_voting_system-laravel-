@extends('layout.main-layout')
@section('title','Login')

@section('content')
<div class="container mt-5 p-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fas fa-user-circle login-icon"></i>
                    <h3 class="fw-bold mb-0">Welcome Back</h3>
                    <p class="text-light">Please enter your login details</p>
                </div>
                <div class="card-body p-4 p-sm-5">

                    <form action="{{ route('loginUser') }}" method="post">
                        @csrf
                        @if (session('status'))
                        <span class="alert alert-success">
                            {{ session('status') }}
                        </span>
                            
                        @endif
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name='email' id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            @if($errors->any())
                            <span class="text-danger">
                                @error('email')
                                {{ $message }}
                                    
                                @enderror
                            </span>
                            @endif
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->any())
                            <span class="text-danger">
                              @error('password')
                              {{ $message }}
                                  
                              @enderror

                            </span>
                                
                            @endif
                        </div>
                        
                        {{-- <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div> --}}
                        
                        <div class="d-grid mb-4">
                            <button class="btn btn-login btn-lg" type="submit">Log In</button>
                        </div>
                        
                        <div class="text-center mb-3">
                            <a href="#" class="forgot-password">Forgot password?</a>
                        </div>
                        
                        {{-- <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div> --}}
                        
                        {{-- <div class="d-grid gap-2">
                            <button class="btn btn-primary social-btn" type="button">
                                Continue with Google
                            </button>
                            <button class="btn btn-primary social-btn" type="button">
                                Continue with Facebook
                            </button>
                        </div> --}}
                        
                        <div class="text-center mt-4">
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="fw-bold text-primary">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
