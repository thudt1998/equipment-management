@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
    <div class="login-page">
        <div class="login-box mt-200">
            <div class="login-logo">
                <h1 class="text-blue">Welcome To System</h1>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to use system</p>
                    @error('wrong-account')
                    <span class="invalid-feedback input-group mb-3 justify-content-center">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="input-group @error('email') mb-0 @else mb-3 @enderror">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback input-group mb-3">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <div class="input-group @error('password') mb-0 @else mb-3 @enderror">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback input-group mb-3">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
