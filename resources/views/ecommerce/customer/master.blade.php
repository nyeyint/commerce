<section class="myaccount">
	<div class="container">
		<div class="row" style="margin-left: 300px;margin-top: 100px;margin-bottom: 100px;">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-left: -300px;">
				<ul class="nav nav-pills nav-stacked">
					<li{{($active == 'dashboard' ? ' class=active':'')}}><a href="{{route('customer.dashboard')}}">DASHBOARD</a></li>
					<li{{($active == 'account' ? ' class=active':'')}}><a href="{{route('customer.account')}}">ACCOUNT INFO</a></li>
					<li{{($active == 'address' ? ' class=active':'')}}><a href="{{route('customer.address')}}">ADDRESS INFO</a></li>
					<li{{($active == 'orders' ? ' class=active':'')}}><a href="{{route('customer.orders')}}">MY ORDERS</a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{!! $slot !!}
			</div>
		</div>
	</div>
</section>
