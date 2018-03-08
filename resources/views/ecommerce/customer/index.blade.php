@extends('layouts.app')
@section('title', 'Dashboard')

{{-- meta tag --}}

@section('meta')

@endsection

{{-- custom css --}}

@section('css')

@endsection

{{-- main content --}}

@section('content')

@component('ecommerce.customer.master')
@slot('active', 'dashboard')
    <div class="dashboard">



        <div class="box-account-info">
    			<div class="row">
    				<div class="col-md-12 col-sm-12 none">
    					<div class="row">

                <div class="col-md-12 col-sm-12 none">
                    <div class="box">
                        <div class="box-top">
                            @if(!user()->verified)
                                <div class="alert alert-danger">
                                    Your account isn't verified yet! Please check your email for activation, or you can click <a href="#">here</a> to request a new one.
                                </div>
                            @endif

                            <div class="welcome-msg">
                                <h3>Hello, {{user()->name}}</h3>
                                <p>
                                    On the customer dashboard page you can manage account information, address and view order history.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

    						<div class="col-md-6 col-sm-6 none left">
    							<div class="box">
    							  <div class="box-top">
    							 		<h3>CONTACT INFORMATION</h3>
                      <hr>
                      <p >
                          {{user()->name}}
                          <br>
                          {{user()->email}}
                          <br>
                      </p>
                      <a href="{{route('customer.account')}}" class="btn btn-save btn-primary" style="color: #fff">EDIT</a>
    							  </div>
    							</div>
    						</div>
    						<div class="col-md-6 col-sm-6 none right">
    							<div class="box">
    							  <div class="box-top">
    							 		<h3>LAST ORDER</h3>
                      <hr>
                      <p>
                          @if(user()->orders->count() != 0)
                            <table class="table table-bordered">
                                    <tr>
                                        <td>Order ID</td>
                                        <td>Date</td>
                                        <td>Total</td>
                                        <td>Status</td>
                                    </tr>
                                @foreach(user()->orders as $order)
                                    <tr>
                                        <td>{{str_limit($order->order_id, 8, '...')}}</td>
                                        <td>{{$order->created_at->format('d-m-Y')}}</td>
                                        <td>{{_rupiah($order->total)}}</td>
                                        <td>{!! to_label($order->status) !!}</td>
                                    </tr>
                                    @if($loop->index == 3)
                                        @php break; @endphp
                                    @endif
                                @endforeach
                            </table>
                          @else
                            <b><i>Tidak ada order</i></b>
                          @endif
                      </p>
                      <a href="{{route('customer.orders')}}" class="btn btn-save btn-primary" style="color: #fff">MY ORDERS</a>
    							  </div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
			</div>



@endcomponent


@endsection

{{-- script --}}

@section('script')


@endsection
