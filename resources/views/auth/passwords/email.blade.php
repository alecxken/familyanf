@extends('layouts.log')

@section('content')

<div class="container">
  
                <h4>{{ __('Reset Password') }}</h4>
<hr>
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                       
                        </div>
                    </form>
                </div>

@endsection
