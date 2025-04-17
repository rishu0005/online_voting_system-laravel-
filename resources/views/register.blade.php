@extends('layout.main-layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-7 col-xl-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fas fa-user-plus register-icon"></i>
                    <h3 class="fw-bold mb-0">Create Account</h3>
                    <p class="text-white">Join us today! It only takes a minute</p>
                </div>
                <div class="card-body p-4 p-sm-5">
                    <form method="post" action="{{ route('registerUser') }}">
                        @csrf
                        @if(session('status'))
                        <span class="alert alert-danger">
                            {{ session('status') }}
                        </span>

                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="floatingFirstName" placeholder="John">
                                    <label for="floatingFirstName">Full Name</label> 
                                    @if ($errors->any())
                                    <span class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                        
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="username" id="floatingLastName" placeholder="Doe">
                                    <label for="floatingLastName">Username</label>
                                    @if ($errors->any())
                                    <span class="text-danger">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="class" id="floatingFirstName" placeholder="John">
                                    <label for="floatingFirstName">Class </label>
                                    @if ($errors->any())
                                    <span class="text-danger">
                                        @error('class')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="enroll" id="floatingLastName" placeholder="Doe">
                                    <label for="floatingLastName">Enroll no.</label>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            @error('enroll')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="year" id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Year </label>
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('year')
                                        {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>

                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Email address</label>
                            @if($errors->any())
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-floating mb-3">
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
                        
                        
                        <div class="d-grid mb-4">
                            <button class="btn btn-register btn-lg" type="submit">Create Account</button>
                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="fw-bold text-primary">Log In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection