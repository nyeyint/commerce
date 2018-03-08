@extends('layouts.app')
@section('title', 'Login To Your Account')

@section('content')

<div id="content">

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">Login To Your Account</li>
      </ol>
    </div>
  </div>

  <section class="login-sec padding-top-30 padding-bottom-100">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <!-- Login Your Account -->
          @if(session()->has('oauth_error'))
              <div class="alert alert-danger">
                  {{ session('oauth_error') }}
              </div>
          @endif

          @if($errors->any())
              <div class="alert alert-danger">
                  {{ __('bio.login.error_message') }}
              </div>
          @endif

              <!-- FORM -->
              <form method="post" class="login-form" action="">
              {{csrf_field()}}
              <h5 class="text-center" >LOGIN</h5>
                <input type="hidden" name="_next" value="{{request()->next}}">
                <div class="row">
                  <div class="col-sm-12">
                  <label class="text-center">Email Address</label>
                  <input type="email" class="form-control input-form" name="email" placeholder="" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-sm-12">
                  <label>Password</label>
                  <input type="password" class="form-control input-form" name="password" placeholder="" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-sm-6">
                    <input id="cate1" class="styled margin-bottom-25" type="checkbox" >
                    <label for="cate1"> Keep me logged in </label>
                  </div>

                  <div class="col-sm-6">
                    <a href="{{route('ecommerce.password.request')}}" class="forget">Forgot your password?</a>  
                  </div> 
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary margin-bottom-25">LOGIN</button>
                  </div>
                  <p class="text-center"><a href="{{route('ecommerce.register')}}" >REGISTER</a></p>
                </div>


          </form>
          
        </div>

      </div>
    </div>
  </section>


</div>

@endsection
