@extends('layouts.app')
@section('title') DialMed - Register @endsection
@section('content')
<div id="content"> 
    <section class="p-t-b-150"> 
        <div class="container"> 
            <div class="heading-block">
                <h4>{{ __('Register') }}</h4>
                <hr>
                <div class="contact">
                    <div class="contact-form"> 
                    <form role="form" id="contact_form" class="contact-form" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="*Full Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="*E-Mail Address">

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
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*Confirm Password">

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </li>
                                <li class="col-sm-12 no-margin">
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                    </button>
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
