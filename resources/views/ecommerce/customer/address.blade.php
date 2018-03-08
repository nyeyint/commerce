@extends('layouts.app')
@section('title', 'Address')

{{-- meta tag --}}

@section('meta')

@endsection

{{-- custom css --}}

@section('css')

@endsection

{{-- main content --}}

@section('content')

@component('modal')
	@slot('title', 'Address')
	@slot('save', 'Add New')
	@slot('id', 'address_form')
	@slot('action', 'data-submit="#form-address"')

	@include('ecommerce.customer.part.address-form')
@endcomponent

@component('ecommerce.customer.master')
@slot('active', 'address')
				<div class="row">
					<div class="col-md-12 none">
						<div class="table-responsive">
							<div class="text-right padding">
								<a href="#" class="btn btn-primary toggle-modal" data-no-turbolinks='true' data-target="#address_form">Add new address</a>
							</div>
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Title</th>
										<th>Address</th>
										<th>Postal Code</th>
										<th>Province</th>
										<th>City</th>
										<th>Subdistrict</th>
										<th>Default</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								@if(count(user()->address()->get()))
								@foreach(user()->address()->get() as $addr)
									<tr>
										<th>{{$addr->title}}</th>
										<th>{{$addr->street}}</th>
										<th>{{$addr->post_code}}</th>
										<th>{{$addr->province_label}}</th>
										<th>{{$addr->city_label}}</th>
										<th>{{$addr->subdistrict_label}}</th>
										<th>
										@if($addr->default)
											<div class="text-center">
												<i class="fa fa-check"></i>
											</div>
										@else
											<a href="{{route('customer.defaultAddress', $addr->id)}}">Set as Default</a>
										@endif
										</th>
										<th>
										@if(!$addr->default)
											{!! delete_button(route('customer.deleteAddress'), ['id' => $addr->id],'Address will be deleted, you can\'t recover it', 'Remove <i class="fa fa-trash"></i>') !!}
										@endif

										</th>
									</tr>
									@endforeach
									@else
									<tr>
										<td colspan="8">
											<div class="text-center">
												<i>No address, please create one.</i>
											</div>
										</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
@endcomponent


@endsection

{{-- script --}}

@section('script')

<script>
$(function(){
	if(window.location.hash) {
			var hash = window.location.hash;
			$(hash).modal('toggle');
	}
});
</script>

@endsection
