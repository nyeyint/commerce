@extends('layouts.app')
@section('title', __('bio.register.web_title'))

@section('content')

     <!--Site-Content-->
    <div id="#content" class="site-content">
        <div class="container">
            <!--page title-->
            <div class="page_title_area row">
                <div class="col-md-12">
                    <div class="bredcrumb">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li class="active"><a href="{{ url()->current() }}">{{ __('bio.reset.message') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.page title-->

            <!--Login-Page-->
            <div class="login-page">
                <div class="row">
                    <!--col-md-6-->

                    <div class="col-md-6 col-md-offset-3">
                        <div class="login">
                            <h3 class="small-title">{{ __('bio.reset.message') }}</h3>

                                @if($errors->any())

                                    <div class="alert alert-danger">
                                        @if($errors->has('email'))
                                            {{ __('bio.reset.email_error') }}
                                        @elseif($errors->has('password'))
                                            {{ __('bio.reset.password_error') }}
                                        @else
                                            {{ __('bio.reset.errors') }}

                                        @endif
                                    </div>

                                @endif

                            <form action="{{ route('ecommerce.password.request') }}" method="post" class="register-form">

                                {{csrf_field()}}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="col-md-12 col-sm-12 no-padding-right no-padding-left">
                                    <div class="first-name">
                                        <label for="your-first-name">{{ __('bio.reset.email') }} <span class="required">*</span>
                                        </label>
                                        <br>
                                        <input type="email" name="email" value="{{ old('email') }}" class="input-field" id="your-first-name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 no-padding-left">
                                    <div class="email">
                                        <label for="your-email1">{{ __('bio.reset.password') }} <span class="required">*</span>
                                        </label>
                                        <br>
                                        <input type="password" name="password" value="" class="input-field" id="your-email1">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 no-padding-right">
                                    <div class="recapture-text">
                                        <label for="confirm-email">{{ __('bio.reset.password_confirmation') }} <span class="required">*</span>
                                        </label>
                                        <br>
                                        <input type="password" name="password_confirmation" value="" class="input-field" id="confirm-email">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 no-padding-left no-padding-right">
                                    <div class="submit">
                                        <button style="width: 100%;" type="submit" class="btn-hover btn-submit">{{ __('bio.reset.button') }}</button>
                                    </div>
                                </div>
                            </form>
                            <!--register-form-->
                        </div>
                        <!--login-->
                    </div>
                    <!--col-md-6-->
                </div>
                <!--row-->
            </div>
            <!--/.login-page-->

        </div>
        <!--/.container-->
    </div>
    <!--/.site-content-->

@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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
 --}}
