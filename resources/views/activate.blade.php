@extends('master')
@section('content')
<div class="container" style="margin-top:10%; background-color: #F7F7FC">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1  style="padding-top: 20%">Fast Tracker</h1>
        </div>
        <div class="col"  style="border-style: solid;border-color: #1a202c;background-color: #FFFFFF">
            <form action="{{route('register-user')}}" method="POST" style="padding:30px" >
                @csrf
                <h2 style="text-align: center">Active Account</h2>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="text" id="form2Example1" name="email" class="form-control" value="{{old('email')}}"/>
                    <span class="text-danger"> @error('email'){{$message}}@enderror</span>
                </div>

                <!--Password -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">New Password</label>
                    <input type="text" id="form2Example2" name="password" class="form-control" value="{{old('password')}}" />
                    <span class="text-danger"> @error('password'){{$message}}@enderror</span>
                </div>

                <!-- Retype Password -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Retype New Password</label>
                    <input type="text" id="form2Example2" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}"/>
                    <span class="text-danger"> @error('password_confirmation'){{$message}}@enderror</span>
                </div>

                <!-- Submit button -->
                <div class="d-grid gap-2">
                    {{-- <a class="d-grid gap-2" href="{{ url("/register-user") }}"> --}}
                    <button class="btn btn-primary" type="submit">Active Account</button>
                    {{-- </a> --}}
                    <a class="d-grid gap-2" href="{{ url("/login") }}" style="text-decoration: none">Already Resister !! Login Here</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
