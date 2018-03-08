@extends('checkout.master', ['ship' => false, 'show_cart' => true])
@section('title', 'Cart')

@section('content')

<div class="col-md-pull-6 col-md-6">
	<div class="cart-checkout">
		<form action="{{route('cart.postCourier')}}" method="post" accept-charset="utf-8" id="coupon">
			{!! csrf_field() !!}

			<h3>Coupon Code</h3>
			<form action="" class="form-voucher" method="post" accept-charset="utf-8">
					<div style="margin-top: 20px;">
					</div>
					<div class="form-group">
						<input type="text" class="form-control border-all" name="voucher" style="width:70%;display:inline-block;">
						<button style="float:right;width:29%;" type="submit" class="btn" id="redeem-button">REDEEM</button>
					</div>
				</form>
			<br>
	</div>

	<div class="separation"></div>
	<div class="separation"></div>


	<a href="{{route('cart.paymentForm')}}" style="line-height:2.5;margin-top: 20px;" type="submit" class="btn btn-block">CONTINUE</a>
	<div class="form-group"></div>
	<div class="cart-back text-center"><a href="{{route('ecommerce.index')}}/" onClick="ajaxContent(this, event);"><span></span>BACK TO SHOP</a></div>
</form>
</div>
</div>

@section('scripts')
<script>

	$('#coupon').on('submit', function(e) {
			e.preventDefault();

			let $button = $('#redeem-button');
			$button.text('PLEASE WAIT..');
			$button.attr('disabled', true);
			$button.css('cursor', 'default');
			window.setTimeout(function() {
					$button.text('REDEEM');
					$button.attr('disabled', false);
					$button.css('cursor', 'pointer');

			}, 2000);
	});

</script>
@endsection

@endsection
