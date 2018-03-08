@extends('layouts.app')
@section('title', __('bio.register.web_title'))

@section('content')

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">Register New Account</li>
      </ol>
    </div>
  </div>

  <section class="login-sec padding-top-30 padding-bottom-100">
    <div class="container">
      <div class="row">

        <!-- Don’t have an Account? Register now -->
        <div class="col-md-6 col-md-offset-3">
          @if($errors->any())

              <div class="alert alert-danger">
                  @if($errors->has('name'))
                      {{ __('bio.register.name_error') }}
                  @elseif($errors->has('email'))
                      {{ __('bio.register.email_error') }}
                  @elseif($errors->has('password'))
                      {{ __('bio.register.password_error') }}
                  @else
                      {{ __('bio.register.errors') }}

                  @endif
              </div>

          @endif

          <!-- FORM -->
          <form method="post" action="" class="login-form">

              {{csrf_field()}}
              <h5 class="text-center">REGISTER NEW ACCOUNT</h5>
              <div class="row">
                  <div class="col-sm-12">
                <label>Username</label>
                <input type="text" class="form-control input-form" name="name" placeholder="">
                </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                <label>Email</label>
                <input type="email" class="form-control input-form" name="email" placeholder="">
                </div>
                </div>
              
                <div class="row">
                  <div class="col-sm-12">
                    <label>Password</label>
                    <input type="password" class="form-control input-form" name="password" placeholder="">
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-sm-12">
                    <label>Password Confirmation</label>
                    <input type="password" class="form-control input-form" name="password_confirmation" placeholder="">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <input id="newsletter" class="styled margin-bottom-25" type="checkbox" checked>
                    <label for="newsletter"> Join Newsletter </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary margin-bottom-25">REGISTER</button>
                  </div>
                  <p class="text-center">By clicking "REGISTER", you agree to our <a href="{{url ('/')}}" >Privacy Policy</a></p>
                </div>
              
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
