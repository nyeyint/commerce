<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{setting('site.title')}} - @yield('title')</title>
		<meta name="description" content="{{setting('site.description')}}}" />
		<meta name="robots" content="noindex, nofollow" />
		<link rel="shortcut icon" type="image/x-icon" href="{{setting('site.favicon')}}" />
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|Raleway:500,500i|Roboto:300,300i,400,400i" rel="stylesheet">
		<link rel="stylesheet" href="{{url('/assets/checkout/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{url('/assets/checkout/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{url('/assets/checkout/css/style.css')}}" />
		<link rel="stylesheet" href="{{url('/assets/checkout/css/jquery.jscrollpane.css')}}" />
		<link rel="stylesheet" href="/css/bundle.min.css">

		@yield('css')

		<script type="text/javascript" src="{{url('/assets/js/vendors/jquery/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{url('/assets/checkout/js/jquery.form.js')}}"></script>
		<script type="text/javascript" src="{{url('/assets/checkout/js/checkout.js')}}"></script>
		<script type="text/javascript" src="{{url('/assets/checkout/js/jquery.mousewheel.min.js')}}"></script>
		<script type="text/javascript" src="{{url('/assets/checkout/js/jquery.jscrollpane.min.j')}}s"></script>
		<script type="text/javascript" src="{{url('/scripts/cleave/dist/cleave.min.js')}}"></script>
		<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', () => {
		var price = new Cleave('.price-format', {
		    numeral: true,
		    numeralDecimalMark: ',',
		    delimiter: '.'
		});
		var date = new Cleave('.date-format', {
		    date: true,
		    datePattern: ['Y', 'm', 'd']
		});
		});
		</script>
	</head>
	<body class="page-checkout ">
	<header class="hidden-print">
		<div class="container">
		<div class="pull-left cart-back" style="margin-top: 25px;position: absolute;">
			<a href="{{route('ecommerce.index')}}"><span></span> BACK TO SHOP</a>
		</div>
			<div class="logo"><img src="{{url(setting('site.icon'))}}"></div>
		</div>
	</header>
<div class="content">
	<div class="page-div">
		<div class="container">
		@if(Cart::count() < 1 && @$show_cart = true)
		<div class="text-center">
			<h2>{{setting('messages.no_cart_item')}}</h2>
			<p>{{setting('messages.no_cart')}}</p>

			<button type="button" class="btn" onclick="document.location = '{{route('ecommerce.index')}}';">Back to Shop</button>
		</div>
		@else
			@if(@$simple !== true)
				<div class="row">
					<div class="col-md-push-8 col-md-7">
						<div class="cart-summary">
							@if(@$ship == true)
							<div>
								<h3>Ship To</h3>
								<div>
									<p>
										{{session('checkout_address_address')}}, {{session('checkout_address_subdistrict_label')}}, {{session('checkout_address_city_label')}}, {{session('checkout_address_province_label')}}
									</p>
								</div>
							</div>
							@endif
							<h3 onClick="toggleOrder();">Order Summary</h3>
							<div class="cart-summary-list">
								<div class="form-group"></div>
								<div class="order-list">
									<div class="order-item">
	                  @foreach(Cart::content() as $item)
	                  {{-- {{dd($item)}} --}}
	                  			@php
	                  				$picture = getFirstArray($item->model->images);
	                  			@endphp
	                  			<div class="item">
											<div class="cover">
												<img src="{{url($picture)}}" alt="{{$item->name}}" class="img-responsive" />
											</div>
											<div class="caption">
												<div>
													@if($item->options->variant == null)
													<p class="title">{{$item->name}}
													</p>
	                                                @else
	                                                    <?php
	                                                        $variant = Items::getdetailvaraint($item->options->variant);
	                                                        $name_variant = json_decode($variant->name);
	                                                        $nama_variant = "";
	                                                        foreach ($name_variant->variant as $key => $value) {
	                                                        	if ($key == 3) {
	                                                            $nama_variant.= 'Size '.ucwords(strtolower($value)).', ';
	                                                        	}else{
	                                                            $nama_variant.= ucwords(strtolower($value)).', ';
	                                                        	}
	                                                        }
	                                                        $nama_variant = rtrim($nama_variant, ', ');
	                                                    ?>
													<p class="title">{{$_item->name}} - <span>{{ $nama_variant }}</span></p>
														<!-- <span>Warehouse: {{@Warehouses::find($item->options->id_wh)->name}}</span> -->
	                                                @endif
													<div class="q">x{{$item->qty}}</div>
													<div class="price">{{_rupiah($item->price)}}</div>
												</div>
												<a href="{{route('cart.delete', ['id' => $item->rowId])}}" style="color:#147CC0;">Delete</a>
											</div>
										</div>
										@endforeach
	                </div>
								</div>
								<div class="order-sub">
									<div class="item">
										<div class="title">Subtotal</div>
										<div class="price">{{Cart::subtotal()}}</div>
									</div>
									<div class="item">
										<div class="title">Discount</div>
										<div class="price">-</div>
									</div>
									<div class="item order-shipping">
										<div class="title">Shipping</div>
										<div class="price">-</div>
									</div>
								</div>
								<div class="order-sub order-total">
									<div class="item">
										<div class="title">Total</div>
										<div class="price total">{{Cart::subtotal()}}</div>
									</div>
								</div>

								<div class="separation"></div>
								<div class="form-group"></div>
								@if(Request::is('checkout') && !Session::has('voucher'))
								<div class="">
									<h3 onClick="toggleVoucher();">Have a voucher code?</h3>
									<form action="{{route('voucher')}}" style="display: none;" class="form-voucher" onSubmit="formAjax(this, event);" method="post" accept-charset="utf-8">
										{{csrf_field()}}
										<div class="">
											<label>VOUCHER CODE<span>*</span></label>
										</div>
										<div class="form-group">
											<input type="text" class="form-control border-all" name="voucher" value=""  />
											<button type="submit" class="btn">APPLY</button>
										</div>
									</form>
								</div>
								@endif
								<div class="form-group hidden-xs hidden-sm"></div>
							</div>
							<div class="form-group"></div>
						</div>
					</div>
	    @yield('content')
	    </div>
	    @else
		    @yield('content')
	    @endif

	    @endif
    </div>
	</div>
</div>


<footer class="hidden-print">
	<div class="container">
		Copyright &copy; {{date('Y')}} {{setting('site.title')}}.
		</footer>

<div id="loadbar" class="hidden-print"></div>

<script>
    @if(session()->has('error'))
        swal('Oops!', '{{session()->get('error')}}', 'error');
    @elseif(session()->has('success'))
        swal('Success!', '{{session()->get('success')}}', 'success');
    @else

    @endif
</script>

<script type="text/javascript">
function toggleVoucher(){
	$('.form-voucher').toggle();
}
function getState(el) {
	$(el).closest('.form-group').find('.form-error').remove();
	a = $(el).closest('.location-change');
	p = a.attr('data-prefix');
	c = a.find('select[name="' + p + 'country"]').val();
	if (typeof xhr !== 'undefined') {
		xhr.abort();
	}
	xhr = $.get('{{url('ecommerce_assets/checkout/')}}/ajax/state?c=' + c, function(response) {
		if (response.status) {
			div = '<label>PROVINCE <span>*</span></label><div class="custom-select"><div class="replacement" name="' + p + 'state" data-text="Province"></div><select name="' + p + 'state" onChange="customSelect(this); getCity(this);"><option value=""></option>';
			div += response.error;
			div += '</select></div>';
		} else {
			div = '<input type="text" class="form-control" name="' + p + 'state" />';
		}
		a.find('.location-state').html(div);
		a.find('.location-city').html('<label>CITY <span>*</span></label><input type="text" class="form-control border-all" name="' + p + 'city" />');
		a.find('.location-sub').html('<label>DISTRICT <span>*</span></label><input type="text" class="form-control border-all" name="' + p + 'sub" />').hide();
		customSelected();
	}, 'json');
}

function getCity(el) {
	$(el).closest('.form-group').find('.form-error').remove();
	a = $(el).closest('.location-change');
	p = a.attr('data-prefix');
	c = a.find('select[name="' + p + 'country"]').val();
	if (typeof xhr !== 'undefined') {
		xhr.abort();
	}
	xhr = $.get('{{url('ecommerce_assets/checkout/')}}/ajax/city?c=' + c + '&s=' + $(el).val(), function(response) {
		if (response.status) {
			div = '<label>CITY<span>*</span></label><div class="custom-select"><div class="replacement" name="' + p + 'city" data-text="City"></div><select name="' + p + 'city" onChange="customSelect(this); getSub(this);"><option value=""></option>';
			div += response.error;
			div += '</select></div>';
		} else {
			div = '<label>CITY<span>*</span></label><input type="text" class="form-control border-all" name="' + p + 'city" />';
		}
		a.find('.location-city').html(div);
		a.find('.location-sub').html('<label>DISTRICT <span>*</span></label><input type="text" class="form-control border-all name="' + p + 'sub" />').hide();
		customSelected();
	}, 'json');
}

function getSub(el) {
	$(el).closest('.form-group').find('.form-error').remove();
	a = $(el).closest('.location-change');
	p = a.attr('data-prefix');
	c = a.find('select[name="' + p + 'country"]').val();
	s = a.find('select[name="' + p + 'state"]').val();
	if (typeof xhr !== 'undefined') {
		xhr.abort();
	}
	xhr = $.get('{{url('ecommerce_assets/checkout/')}}/ajax/sub?c=' + c + '&s=' + s + '&ct=' + $(el).val(), function(response) {
		if (response.status) {
			div = '<label>DISTRICT <span>*</span></label><div class="custom-select"><div class="replacement" name="' + p + 'sub" data-text="District"></div><select name="' + p + 'sub" onChange="customSelect(this); customSelected();"><option value=""></option>';
			div += response.error;
			div += '</select></div>';
			a.find('.location-sub').show();
		} else {
			div = '<input type="text" class="form-control" name="' + p + 'sub" />';
			a.find('.location-sub').hide();
		}
		a.find('.location-sub').html(div);
		customSelected();
	}, 'json');
}

function checkAddress(el) {
	a = $(el).closest('.check-address');
	p = a.attr('data-prefix');
	id = $(el).val();
	if (typeof xhr !== 'undefined') {
		xhr.abort();
	}
	xhr = $.get('{{url('ecommerce_assets/checkout/')}}/ajax/address?id=' + id + '&p=' + p, function(response) {
		if (response.redirect) {
			window.location.replace(response.redirect);
			return false;
		}
		if (response.status) {
			a.find('.' + p + 'title').hide();
		} else {
			a.find('.' + p + 'title').show();
		}
		a.find('.' + p + 'title input').val('');
		$('.check-address-' + p).html(response.message);
		customSelected();
	}, 'json');
}

</script>
<script src="{{url('/js/bundle.min.js')}}"></script>

@yield('scripts')

</body>
</html>
