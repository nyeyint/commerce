@extends('layouts.app')
@section('title', __('bio.forgot_password.web_title'))

@section('content')

     <!--Site-Content-->
    <div id="#content" class="site-content">
        <div class="container">
            <!--page title-->
            <div class="page_title_area row">
                <div class="col-md-12">
                    <div class="bredcrumb">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="active"><a href="{{ url()->current() }}">{{ __('bio.forgot_password.password_message') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.page title-->

            <!--Login-Page-->
            <div class="login-page">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="login">
                            <h3 class="small-title">{{ __('bio.forgot_password.password_message') }}</h3>

                            @if(session()->has('status'))
                                <div class="alert alert-success">
                                    {{ __('bio.forgot_password.success_message') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-success">
                                    {{ __('bio.forgot_password.success_message') }}
                                </div>
                            @endif

                            <form action="{{route('ecommerce.password.email')}}" class="login-form" method="post">

                                {{csrf_field()}}

                                <div class="col-md-12 col-sm-12 no-padding-left no-padding-right">
                                    <div class="email">
                                        <label for="your-email">{{ __('bio.login.login_email') }} <span class="required">*</span>
                                        </label>
                                        <br>
                                        <input type="email" name="email" value="{{ old('email') }}" class="input-field" id="your-email" required>
                                    </div>
                                </div>

                                <!--login-form-->
                                <div class="login-method col-md-12 no-padding-left no-padding-right">
                                    <hr>
                                    <button style="width: 100%;margin-bottom: 15px;" type="submit" class="btn-hover btn-submit">{{ __('bio.forgot_password.button') }}</button>
                                </div>
                                <!--login-method-->

                            </form>
                        </div>
                        <!--losin-->
                    </div>

                </div>
                <!--row-->
            </div>
            <!--/.login-page-->

        </div>
        <!--/.container-->
    </div>
    <!--/.site-content-->

@endsection
