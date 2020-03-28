@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @include('partials.alerts')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-7">
                        User Login
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form action="{{route('auth.login')}}" method="post">
                    @csrf
                        <div class="row form-group">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter Your Email...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password" value="{{old('password')}}" placeholder="Enter Your Paaword...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="form-check offset-sm-3">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label for="remember" class="form-check-label"><small>Remember Me!</small></label>
                            </div>
                        </div>
                        <div class="form-check">
                            <a href="#"><small>Forgot your password?</small></a>
                        </div>
                        <div class="offset-sm-3">
                            @include('partials.validation_errors')
                        </div>

                        <div class="offset-sm-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
