@extends('layouts.app')

@section('tittle', 'Login')

@section('content')

                    <div class="container">
                        <div class="row justify-content-center">
                             <div class="col-md-8">
                                  <div class="card">
                                     <div class="card-header">Forgot Password</div>
        
                             <div class="card-body">
                            <form method="POST" action="{{ route('forgot.password.post') }}">
                                @csrf

                                {{-- Validation Register Success --}}
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                   {{ Session::get('message') }}
                               </div>
                                @endif
                   
        
                              {{-- User Input For Email --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    </div>
                                </div>
                                
                             
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            Send Password Reset Link
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
