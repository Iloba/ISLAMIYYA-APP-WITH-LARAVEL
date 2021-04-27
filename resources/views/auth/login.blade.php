@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-header">
                    <img width="50%;" class="img-fluid mx-auto d-block pt-2" src="{{asset('./img/e-logo.png')}}" alt="E-report">
                    <div>
                        <h3 class="text-center mt-2">{{ __('Login') }}</h3>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                        <div>
                            <label for=""><b>Username/Email</b></label> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">              
                                      <span class="input-group-text" id="basic-addon1"><i class="icofont-ui-user"></i></span>
                                    </div>  
                                    <input  id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username" value="{{old('email')}}" required autocomplete="email" autofocus aria-label="Student Name" aria-describedby="basic-addon1">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                      
                            
                        
                        <div>
                            <label for=""><b>Password</b></label> 
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">              
                                  <span class="input-group-text" id="basic-addon1"><i class="icofont-lock"></i></span>
                                </div>  
                                <input  id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password" aria-label="Student Name" aria-describedby="basic-addon1">
                            </div>
                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                     
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
