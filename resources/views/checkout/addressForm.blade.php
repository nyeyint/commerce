@extends('checkout.master', ['ship' => false, 'show_cart' => true])
@section('title', 'Cart')

@section('content')

<div class="col-md-pull-6 col-md-6">
	<div class="cart-checkout">
		<form action="{{route('cart.postAddress')}}" method="post" accept-charset="utf-8">
		{!! csrf_field() !!}

			<h3>Shipping Address</h3>
			<div class="form-group"></div>

			@if(user()->login)
			<div class="form-group">
				@if(count(user()->address()->get()) == 0)
				<!-- Add New Address -->
				<br>
					<i>You have no address please <a href="{{route('customer.address', '#address_form')}}">click here</a> to create one.</i>
				@else


				<div class="form-radio form-group">
					@foreach(user()->address()->get() as $address)
						<div class="cradio cradio-payment-{{$loop->index}}" >
							<input type="radio" class="css-radio" id="payment-{{$loop->index}}" name="address" value="{{encrypt($address->id)}}" {{($address->default) ? 'checked' : ''}}/>
							<label class="css-label" for="payment-{{$loop->index}}">
								{{$address->title}}
								<br>
							</label>
							<p style="padding-left: 35px;">{{$address->street}}, {{$address->city_label}}, {{$address->subdistrict_label}}, {{$address->province_label}}, {{$address->post_code}}</p>

						</div>
					@endforeach
				</div>
			</div>
				@endif
			@endif

	</div>
	<div class="separation"></div>
	<div class="form-group"></div>

	<button type="submit" class="btn btn-block" {{(user()->login && count(user()->address()->get()) == 0) ? 'disabled' : ''}}>CONTINUE</button>
	<div class="form-group"></div>
	<div class="cart-back text-center"><a href="{{route('ecommerce.index')}}/" onClick="ajaxContent(this, event);"><span></span>BACK TO SHOP</a></div>
</form>
</div>
</div>

@endsection
