@extends('layouts.app')

@section('title') DialMed - Login @endsection

@section('content')
  
<div id="content"> 
    <section class="p-t-b-150"> 
        <div class="container"> 
            <div class="heading-block">
                <h4>{{ __('LOGIN') }}</h4>
                <hr>
                <div class="contact">
                    <div class="contact-form"> 
                    <form role="form" id="contact_form" class="contact-form" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="*E-Mail Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <table>
                                        <tr>
                                            <td>{{ __('Remember Me') }}</td>
                                            <td style="padding-left: 30px;"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="col-sm-12 no-margin">
                                    @if (Route::has('password.request'))
                                        <button type="submit" class="btn btn-primary pull-left">
                                            {{ __('Login') }}
                                        </button>
                                    @endif
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
