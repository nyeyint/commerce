@extends('checkout.master', ['ship' => false, 'show_cart' => true])
@section('title', 'Cart')

@section('content')

<div class="col-md-pull-6 col-md-6">
	<div class="cart-checkout">
		<form action="{{route('cart.postPayment')}}" method="post" accept-charset="utf-8">
		{!! csrf_field() !!}

			<h3>Payment Method</h3>
			<div class="form-group"></div>

			<div class="form-group"></div>
					@foreach(payment_gateway('active') as $pg)
						<div class="form-radio form-group">
							<div class="cradio cradio-payment-method-{{$loop->index}}" >
									<input type="radio" class="css-radio" id="payment-method-{{$loop->index}}" name="payment_method" value="{{encrypt($pg->prefix)}}" {{($loop->first) ? 'checked' : ''}} />
									<label class="css-label" for="payment-method-{{$loop->index}}">
										{{$pg->front_name}}
										<br>
										<img src="{{url($pg->icon)}}" width="180"> &nbsp;
									</label>
							</div>
					@endforeach
			</div>

			<div class="separation"></div>
			<div class="form-group"></div>
	</div>


	<button type="submit" class="btn btn-block" {{(user()->login && count(user()->address()->get()) == 0) ? 'disabled' : ''}}>CONTINUE</button>
	<div class="form-group"></div>
	<div class="cart-back text-center"><a href="{{route('ecommerce.index')}}/" onClick="ajaxContent(this, event);"><span></span>BACK TO SHOP</a></div>
</form>
</div>
</div>

@section('scripts')
<script>

</script>
@endsection

@endsection
