@php
    $payment = json_decode($order->payment_method);
    $address = json_decode($order->shipping_address);
    $courier = json_decode($order->shipping_method);
    $invoice = json_decode($order->invoice);
@endphp
@extends('layouts.app')
@section('title', 'Order Details')

{{-- meta tag --}}

@section('meta')

@endsection

{{-- custom css --}}

@section('css')

@endsection

{{-- main content --}}

@section('content')

@component('ecommerce.customer.master')
@slot('active', 'orders')
  <div class="padding">
  	<a href="{{route('customer.orders')}}" class="btn btn-save btn-primary btn-sm">Back</a>
  	<div class="pull-right text-right">
  		<a href="{{$invoice->url_path}}&action=view" class="btn btn-save btn-warning btn-sm">DOWNLOAD INVOICE &nbsp;<span class="fa fa-download"></span></a>
  	</div>
  </div>

  <div class="padding"></div>
  <div class="row padding">
  	<div class="col-md-4 ">
  		Order Date : <br />
      <strong>{{$order->created_at->format('d-m-Y')}}</strong>
  	</div>
  	<div class="col-md-4">
  		Total: <br />
      <strong>{{_rupiah($order->total)}}</strong>
  	</div>
    <div class="col-md-4">
  		Order ID : <br /><strong>{{$order->order_id}}</strong>
  	</div>
  </div>
  <hr>
  <div class="row padding">
  	<div class="col-md-4">
  		Shipping Method: <br />
      <strong>
        {{strtoupper($courier->courier_name)}} -
        @if($courier->courier_name == 'jne')
            {{jne_formatter($courier->service)}}
        @else
            {{$courier->service}}
        @endif
         - {{_rupiah($courier->cost[0]->value)}}
      </strong>
  	</div>
    <div class="col-md-4">
      Order Status: <br>{!! to_label($order->status) !!}
  	</div>
  </div>
  <div class="row padding">
  	@if($order->status == 'shipped' || $order->status == 'delivered')
  	<div class="col-md-6">
  		Shipping Date:
  		<strong><strong>
  	</div>
  	@endif
  </div>
  <div class="row padding">
  	<div class="col-md-6">
  		Payment Method: <br />

      <label class="label label-lg label-info">{{$payment->front_name}}</label>
  	</div>
  </div>

  <div class="row padding">
  	<div class="col-md-12">
  		<table class="table table-bordered">
  			<tr>
  				<td>Picture</td>
  				<td>Name</td>
  				<td>Price</td>
  				<td>Quantity</td>
  			</tr>
  			@foreach($order->details as $item)
          @php
            $product = product_details($item->item_id);
          @endphp
  			<tr>
  				<td width="80"><figure><img src="{{url(getFirstArray($product->images))}}" class="img-responsive"></figure></td>
  				<td>{{ $product->name }}</td>
  				<td>{{_rupiah($product->price)}}</td>
  				<td>{{$item->quantity}}</td>
  			</tr>
  			@endforeach
  		</table>
  		@if($order->payment_method == 1 && strtolower($order->status) != 'paid' && strtolower($order->status) != 'shipped')
  		<h6 class="section-title">Payment Instruction</h6>
  		<div class="panel-group" id="bank" role="tablist" aria-multiselectable="true">
  		<?php $no = 0; ?>
  		@foreach(section('rekening') as $row => $bank)
  		  <div class="panel panel-default">
  		    <div class="panel-heading" role="tab" id="heading{{$row}}">
  		      <h4 class="panel-title">
  		        <a role="button" data-toggle="collapse" data-parent="#bank" href="#collapse{{$row}}" aria-expanded="true" aria-controls="collapse{{$row}}">
  		          {{$bank->bank_name}}
  		        </a>
  		      </h4>
  		    </div>
  		    <div id="collapse{{$row}}" class="panel-collapse collapse {{$no++ == 0 ? 'in' : ''}}" role="tabpanel" aria-labelledby="heading{{$row}}">
  		      <div class="panel-body">
  		      {!! $bank->bank_instruction !!}
  		      </div>
  		    </div>
  		  </div>
  		  @endforeach
  		</div>
  		@endif
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
  		<h6>Shipping Address</h6>
  		<p class="lh"><strong>
  			{{user()->name}}
  			<br>
  			{{$address->street}}, {{$address->city_label}}, {{$address->subdistrict_label}}, {{$address->province_label}}, {{$address->post_code}}
  		</strong></p>
  	</div>
  	@if(strtolower($order->status) != 'reject' && strtolower($order->status) != 'canceled')
  	<div class="col-md-6">
  		<h6>Track Order</h6>
  		@if(strtolower($order->status) !== 'shipped')
  		<p class="lh"><strong>
  			You have to pay your order first to be able to use the 'Track Order' feature.
  		</strong></p>
  		@else
  		<p class="lh"><strong>
  			You can track your order by click the following button. (No. Resi: {{$rajaongkir->rajaongkir->result->summary->waybill_number}})
  		</strong></p>
  		<a href="#" class="btn btn-primary track-order-open">Track Order</a>
  		@endif
  	</div>
  	@endif
  </div>

  {{-- <div class="modal fade" tabindex="-1" role="dialog" id="tracker">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Track Order</h4>
        </div>
        <div class="modal-body">
  		<div class="row">
  			<div class="col-md-12">
  				@if(!empty($rajaongkir) && $rajaongkir->rajaongkir->status->code == 200)
  				<div class="row">
  					<div class="col-md-12">
  						<div class="form-group pad-thin">
  							<?php $rajaongkir = $rajaongkir->rajaongkir->result;?>
  							No Resi: <b>{{$rajaongkir->summary->waybill_number}} (JNE)</b>
  						</div>
  						<div class="form-group pad-thin">
  							Date Sent: <b>{{$rajaongkir->details->waybill_date}}</b>
  						</div>
  						<div class="form-group pad-thin">
  							Service Code: <b>{{$rajaongkir->summary->service_code}}</b>
  						</div>
  						@if($rajaongkir->delivered == true)
  							<div class="alert alert-success">Status: Received</div>
  						@else
  							<div class="alert alert-success">Status: On Process</div>
  						@endif
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-md-6">
  						<div class="form-group pad-med">
  							<label>Shipper Name</label>
  							<div>{!! $rajaongkir->details->shippper_name !!}</div>
  						</div>
  					</div>
  					<div class="col-md-6">
  						<div class="form-group pad-med">
  							<label>Receiver Name</label>
  							<div>{!! $rajaongkir->details->receiver_name !!}</div>
  						</div>
  					</div>
  					<div class="col-md-6">
  						<div class="form-group pad-med">
  							<label>Shipper City</label>
  							<div>{!! $rajaongkir->details->origin !!}</div>
  						</div>
  					</div>
  					<div class="col-md-6">
  						<div class="form-group pad-med">
  							<label>Receiver City</label>
  							<div>{!! $rajaongkir->details->destination !!}</div>
  						</div>
  					</div>
  				</div>
  				<table class="table table-bordered">
  					<tbody>
  						<tr>
  							<td>No Resi</td>
  							<td>{{$rajaongkir->summary->waybill_number}}</td>
  						</tr>
  						<tr>
  							<td>Jenis Layanan </td>
  							<td>{{$rajaongkir->summary->service_code}}</td>
  						</tr>
  						<tr>
  							<td>Tanggal Pengiriman</td>
  							<td>{{$rajaongkir->details->waybill_date}}</td>
  						</tr>
  						<tr>
  							<td>Berat</td>
  							<td>{{$rajaongkir->details->weight}} kg</td>
  						</tr>
  						<tr>
  							<td>Nama Pengirim</td>
  							<td>{{$rajaongkir->details->shippper_name}}</td>
  						</tr>
  						<tr>
  							<td>Kota Asal Pengirim</td>
  							<td>{{$rajaongkir->details->shipper_address1}}</td>
  						</tr>
  						<tr>
  							<td>Nama Penerima</td>
  							<td>{{$rajaongkir->details->receiver_name}}</td>
  						</tr>
  						<tr>
  							<td>Alamat Penerima</td>
  							<td>{{$rajaongkir->details->receiver_address1, $rajaongkir->details->receiver_address2}}</td>
  						</tr>
  					</tbody>
  				</table>
  				<p></p>
   		<h4>Status Pengiriman</h4>
  				<table class="table table-bordered">
  					<tbody>
  						<tr>
  							<td>Status</td>
  							<td>{{$rajaongkir->delivery_status->status}}</td>
  						</tr>
  						<tr>
  							<td>Nama Penerima</td>
  							<td>{{$rajaongkir->delivery_status->pod_receiver}}</td>
  						</tr>
  						<tr>
  							<td>Tanggal Diterima</td>
  							<td>{{$rajaongkir->delivery_status->pod_date}}</td>
  						</tr>
  					</tbody>
  				</table>
  		 		<p></p>
  				<table class="table table-bordered">
  					<thead>
  						<tr>
  							<th>Status</th>
  							<th>City</th>
  							<th>Date</th>
  						</tr>
  					</thead>
  					<tbody>
  						@isset($rajaongkir->manifest)
  						@foreach($rajaongkir->manifest as $manifest)
  						<tr>
  							<td>{{$manifest->manifest_description}}</td>
  							<td>{{$manifest->city_name}}</td>
  							<td>{{date('D, d M Y', strtotime($manifest->manifest_date))}} {{date('h:i', strtotime($manifest->manifest_time))}}</td>
  						</tr>
  						@endforeach
  						@endisset
  					</tbody>
  				</table>
  				@elseif(!empty($rajaongkir))
  					<h6>Tracking : </h6><strong>{{$rajaongkir->rajaongkir->status->description}}</strong>
  				@endif
  			</div>
  		</div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  --}}
@endcomponent


@endsection

{{-- script --}}

@section('script')



@endsection
