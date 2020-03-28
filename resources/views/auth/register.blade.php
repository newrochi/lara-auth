@extends('layouts.app')

@section('title','Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        @include('partials.alerts')
        <div class="card">
            <div class="card-header">
                User Registration
            </div>
            <div class="card-body">
                <form action="{{route('auth.register')}}" method="post">
                    @csrf
                        <div class="row form-group">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter Your Email...">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="name" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="Enter Your Name...">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password" value="{{old('password')}}" placeholder="Enter Your Paaword...">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Enter Your Paaword Again...">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="tel" name="phone_number" class="form-control" id="phone_number" value="{{old('phone_number')}}" placeholder="Enter Your Phone Number...">
                            </div>
                        </div>
                        @include('partials.validation_errors')
                        <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
