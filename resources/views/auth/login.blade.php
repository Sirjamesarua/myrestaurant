@extends('layouts.app')

@section('content')
<div class="container" style="font-size:130%;">
                <div class="card-header"><center><b style="font-size: 130%;"><u>{{ __('Login') }}</u></b></center></div>
                <br />
                <br />

                <div class="card-body border-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="">
                            <!--EMAIL-->
                            <i>Email Address :</i><br />
                            <div class="">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" style="width:100%;height: 40px;"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></input>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <br />
                            <!--PASSWORD-->
                            <i>Password :</i><br />
                            <div class="">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" style="width:100%;height: 40px;"  name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <br />
                            <div class="form-group row">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            <i style="font-size: 90%;">{{ __('Remember Me') }}</i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row w3-center">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" class="" style="width:50%;font-size:100%;border-radius:20%;background-color:purple; ">
                                        {{ __('Login') }}
                                    </button>
                                    <br />
                                </div>
                            </div>

                                <!--<div class="w3-center">
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}" style="color:purple;">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    <br />
                                        <a class="" href="{{ route('register') }}" style="font-size:100%;color:purple;">
                                            {{ __('New Admin? Register Now') }}
                                        </a>
                                </div>-->

                            <br />
                            <br />

                        </div>





                    </form>
                </div>
</div>
@endsection
