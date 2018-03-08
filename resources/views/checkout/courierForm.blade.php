@extends('checkout.master', ['ship' => false, 'show_cart' => true])
@section('title', 'Cart')

@section('content')

<div class="col-md-pull-6 col-md-6">
	<div class="cart-checkout">
		<form action="{{route('cart.postCourier')}}" method="post" accept-charset="utf-8">
		{!! csrf_field() !!}

			<h3>Shipping Method</h3>
			<div class="form-group"></div>

			<div class="form-group"></div>
			<div class="form-radio form-group" id="ongkir-loader">
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
	$(function(){
		$.ajaxSetup({
		    headers: {
		        'Content-Type': 'application/x-www-form-urlencoded',
		        'X-CSRF-TOKEN': '{{csrf_token()}}'
		    }
		});

		//TODO
		// 1. request ke /courier/get untuk mendapatkan list courier yang tersedia
		// 2. foreach setiap courier yang didapat
		// 3. after foreach request ke api rajaongkir dengan courier shortcut
		// 4. lalu append data ke #ongkir-loader
		// -- done

		console.log('ajax courier started!');
		$.ajax({
			url: '{{route('courier.active')}}',
			type: 'POST',
			beforeSend: function() {
				$("#ongkir-loader").html('<img src="{{url("/assets/checkout/images/loading.gif")}}" width="20%"/>');
			},
			success: function(data) {
				if(data.length > 0) {
					data.forEach(function(courier){
						@php
							$weight = 0;
							foreach(Cart::content() as $cart) {
									$weight += $cart->model->weight * $cart->qty;
							}
						@endphp
						$.ajax({
							url: '{{route('ongkir.calculate')}}',
							type: 'POST',
							data: {
								origin: '{{setting('ecommerce.shipping_origin')}}',
								destination: '{{session('shipping_address')->subdistrict_id}}',
								weight: '{{$weight}}',
								courier: courier.courier_shortcut
							},
							beforeSend: function() {
								$("#ongkir-loader").html('<img id="loadingGif" src="{{url("/assets/checkout/images/loading.gif")}}" width="20%"/>');
							},
							success: function(data, status,xhr) {
								// console.log(data);

								data=JSON.parse(data);
								// console.log(+ data);
								if(data.rajaongkir.status.code == 200) {
									$("#courier-result h1").html(data.rajaongkir.results[0].name);
									let list = "";
									let costs = data;
									// console.log(costs.rajaongkir.results);
									$.each(costs.rajaongkir.results[0].costs, function(i, item) {
										var courier_name = costs.rajaongkir.results[0].code;
										if(courier_name == 'J&T') {
											courier_name = 'jnt';
										}
										else
										{
											courier_name = courier_name;
										}
										console.log(courier_name);
										// console.log(item.service);

										// Append courier name from courier object.
										// You can inject any data to Courier Object item here
										item.courier_name = courier_name;

										if(courier_name == 'jne') {
											list += '<div class="cradio" class="jne">'
											list += '			<input type="radio" class="css-radio" id="shipping-'+item.service+'" name="shipping_method" data-price="'+item.cost[0].value+'" value="' + escape(JSON.stringify(item)) + '" onclick="changeShipping();" required />'
											list += '<label class="css-label" for="shipping-'+item.service+'" id="shipping-price-'+item.service+'"><img src="/' + courier.logo + '" style="width:12%;"> &nbsp;&nbsp;&nbsp;' + courier_name.toUpperCase() + ' '+jneName(item.service)+' - '+number_format(item.cost[0].value, 0)+'</label>';
											list += '		</div>';
										}
										else
										{
											list += '<div class="cradio">'
											list += '			<input type="radio" class="css-radio" id="shipping-'+item.service+'" name="shipping_method" data-price="'+item.cost[0].value+'" value="'+ escape(JSON.stringify(item)) + '" onclick="changeShipping();" required />'
											list += '<label class="css-label" for="shipping-'+item.service+'" id="shipping-price-'+item.service+'"><img src="/' + courier.logo + '" style="width:12%;"> &nbsp;&nbsp;&nbsp;' + courier_name.toUpperCase() + ' '+item.service+' - '+number_format(item.cost[0].value, 0)+'</label>';
											list += '		</div>';
										}
										$("#ongkir-loader").append(list);
										list = '';
										$('#loadingGif').hide();
									});

								}
							},
							error: function(xhr) {
								console.log(xhr)
							}
						});
					});
				}
			},
			error: function(data) {
				console.log(data);
			}
		});


	});
</script>
<input type="hidden" id="subtotal" value="{{Cart::subtotal(0,false,false)}}">
    <script type="text/javascript">


function changeShipping() {
	subtotal = $('#subtotal').val();
	bulk = 0;
	group = 0;
	voucher = 0;
	balance = 0;
	shipping = parseInt($('input[name="shipping_method"]:checked').attr('data-price'));
	$("[name=ongkir]").val(shipping);
	total = parseInt(subtotal - bulk - group - voucher);
	total = parseInt(total - balance);
	if (total < 0) {
		balance_used = total;
		total = 0;
	} else {
		balance_used = balance;
	}
	total += shipping;
	if (shipping <= 0) {
		$('.order-shipping .price').html('-');
	} else {
		$('.order-shipping .price').html(fPrice(shipping));
	}
	if (total <= 0) {
		$('.cradio-payment--1').show().find('input').click();
		$('.cradio-payment-1').hide();
		$('.cradio-payment-2').hide();
	} else {
		$('.cradio-payment--1').hide();
		$('.cradio-payment-1').show().find('input').click();
		$('.cradio-payment-2').show();
	}
	$('.order-total .price').html('IDR ' + fPrice(total));
	$('.cart-summary-total').html('IDR ' + fPrice(total));
	$("[name=total]").val(total);
}


function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function jneName(service) {
	if(service == 'CTC' || service == 'REG') {
		return 'REG';
	}else if(service == 'CTCYES' || service == 'YES') {
		return 'YES';
	}
	else
	{
		return service;
	}
}

</script>
@endsection

@endsection
