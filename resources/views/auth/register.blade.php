@extends('layouts.log')

@section('content')

      <div class="az-column-signup">

        <div class="az-signup-header">
       <!--    <h2>Welcome </h2> -->
          <h4>Please Signup</h4>

              <form method="POST" action="{{ route('register') }}">
                        @csrf
            <div class="form-group">
              <label>First name & Last name</label>

                 <input id="name" placeholder="Enter your first name and last name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
       
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
                          <input placeholder="Enter your email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div><!-- form-group -->
      <div class="form-group">
              <label>Confirm Password</label>
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
            </div>
        
                
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
           <!-- row -->
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="{{url('login')}}">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->

@endsection
