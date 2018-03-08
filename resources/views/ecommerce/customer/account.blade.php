@extends('layouts.app')
@section('title', 'Account')

{{-- meta tag --}}

@section('meta')

@endsection

{{-- custom css --}}

@section('css')

@endsection

{{-- main content --}}

@section('content')

@component('ecommerce.customer.master')
@slot('active', 'account')


    <form method="POST" action="{{route('customer.updateAccount')}}">
        <div>

            <div class="fields">
                <div class="col-md-5 none">
                    <h1>Account Info</h1>
                    <br>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif

                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="firstname form-group">
                        <label for="name">Name *</label>
                        <div class="input-box">
                            <input type="text" name="name" id="name" class="form-control" required="" value="{{user()->name}}">
                        </div>
                    </div>
                    <div class="email form-group">
                        <label for="email">Email Address *</label>
                        <div class="input-box">
                            <input type="email" name="email" id="email" class="form-control" required="" value="{{user()->email}}">
                        </div>
                    </div>
                    <div class="phone form-group">
                        <label for="emailphone">Phone Number *</label>
                        <div class="input-box">
                            <input type="number" name="phone" id="phone" class="form-control" required="" value="{{@user()->phone->number}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="change_password" id="change_password">
                        <label for="change_password">Change Password</label>
                    </div>
                    <div id="change_password_form" style="display: none;">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-box">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password Confirm</label>
                            <input type="password" name="passwordconfirm" class="form-control">
                        </div>
                    </div>
                    <div class="save">
                     <button type="submit" class="btn btn-save btn-primary">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endcomponent


@endsection

{{-- script --}}

@section('script')

<script>
$(function() {
    $("#change_password").change(function() {
        $("#change_password_form").fadeToggle();
    });
});
</script>

@endsection
