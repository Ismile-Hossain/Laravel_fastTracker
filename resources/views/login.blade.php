@extends('master')
@section('content')
    <div class="container" style="margin-top:10%; background-color: #F7F7FC">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1  style="padding-top: 20%">Fast Tracker</h1>
            </div>
            <div class="col"  style="border-style: solid;border-color: #1a202c;background-color: #FFFFFF">
                <form style="padding:30px">
                    <h2 style="text-align: center">Sign In</h2>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Phone Number / Email Address</label>
                        <input type="email" id="form2Example1" class="form-control" />
                    </div>
                    <!-- Retype New Password -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" />
                    </div>
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="">
                        <a class="d-grid gap-2" href="{{ url("/overview") }}">
                        <button class="btn btn-primary" type="button">Sign in</button>
                        </a>
                        <a class="d-grid gap-2" href="{{ url("/register") }}" style="text-decoration: none">New User !! Register Here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
