@extends('layouts.app')

@section('tittle', 'Login')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reset.password.post') }}">
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

                      <input type="hidden" name="token" value="{{ $token }}">
                      
                        {{-- User Input For Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                {{-- Check if the required fields are empty --}}
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>

                        {{-- User Input For Password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">New Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                                {{-- Check if the required fields are empty --}}
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        {{-- User Input For Confirm Password --}}
                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">New Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                {{-- Check if the required fields are empty --}}
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection