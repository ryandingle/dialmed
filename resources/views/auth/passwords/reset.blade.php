@extends('layouts.app')
@section('title') DialMed - Reset Password @endsection
@section('content')
<div id="content"> 
    <section class="p-t-b-150"> 
        <div class="container"> 
            <div class="heading-block">
                <h4>{{ __('Reset Password') }}</h4>
                <hr>
                <div class="contact">
                    <div class="contact-form"> 
                    <form role="form" id="contact_form" class="contact-form" method="post" action="{{ route('password.update') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="*E-Mail Address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="*New Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*Confirm New Password">
                                    </label>
                                </li>
                                <li class="col-sm-12 no-margin">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
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
