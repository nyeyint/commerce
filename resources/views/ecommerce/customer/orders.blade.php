@extends('layouts.app')
@section('title', 'Orders')

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
  <div class="row" >
    <h3>My Orders</h3>
    <hr>
    <div class="col-md-12 none">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Date</th>
              <th>Quantity</th>
              <th>Order Total</th>
              <th>Payment Method</th>
              <th>Status</th>
              <th width="50">Action</th>
            </tr>
          </thead>
          <tbody>
          @if(user()->orders->count() > 0)
              @foreach(user()->orders as $order)
                <tr>
                  <td>{{$order->order_id}}</td>
                  <td>{{$order->created_at->format('d-m-Y')}}</td>
                  <td>{{$order->quantity}} item(s)</td>
                  <td>{{_rupiah($order->total)}}</td>
                  <td>{{ json_decode($order->payment_method)->front_name }}</td>
                  <td>{!! to_label($order->status) !!}</td>
                  <td width="70">
                    <a href="{{route('customer.order.details', ['id' => encrypt($order->order_id)])}}" title="View" class="btn btn-save btn-primary">
                      View
                    </a>
                  </td>
                </tr>
              @endforeach
          @else
            <tr>
              <td colspan="7" align="center"><i>No Orders</i></td>
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



@endsection
