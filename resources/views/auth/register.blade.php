@extends('layouts.app')

@section('tittle', 'Login')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="/save">
                        @csrf

                        {{-- Validation Register Success --}}
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                           {{ Session::get('success') }}
                        </div>
                      @endif
           
                      {{-- Validation Register Fail --}}
                      @if(Session::get('fail'))
                        <div class="alert alert-danger">
                           {{ Session::get('fail') }}
                        </div>
                      @endif
                      
                      {{-- User Input For Name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">User Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                {{-- Check if the required fields are empty --}}
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        {{-- User Input For Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                {{-- Check if the required fields are empty --}}
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        {{-- User Input For Password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                                {{-- Check if the required fields are empty --}}
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        {{-- User Input For Confirm Password --}}
                        <div class="row mb-3">
                            <label for="confirm_password" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="confirm_password">
                                {{-- Check if the required fields are empty --}}
                                <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Register
                                </button>
                                <a class="btn btn-link" href="login">
                                    Already Have An Account?? 
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
