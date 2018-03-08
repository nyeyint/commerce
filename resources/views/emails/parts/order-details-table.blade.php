@php
  $courier = json_decode($order->shipping_method);
  $payment = json_decode($order->payment_method);
  $address = json_decode($order->shipping_address);
@endphp
  <table class="table">
  <thead>
  	<tr>
  		<th>Picture</th>
  		<th>Name</th>
  		<th>Price</th>
  		<th>Quantity</th>
  		<th>Total</th>
  	</tr>
  </thead>
  <tbody>

    @foreach($order_details as $o)
      @php $product = product_details($o->item_id); @endphp
      <tr>
        <td width="80">
          <figure>
            <img src="{{url(getFirstArray($product->images))}}" class="img-responsive">
          </figure>
        </td>
        <td style="width:340px;">
          {{str_limit($product->name, 37, '...')}}
        </td>
        <td >
          {{_rupiah($product->price)}}
        </td>
        <td align="center">
          <b>{{$o->quantity}}</b>
        </td>
        <td>
          {{_rupiah($o->total)}}
        </td>
      </tr>
    @endforeach

      <tr style="border-top: 2px solid #ccc;">
        <td colspan="4" align="right"><strong>Sub Total</strong></td>
        <td style="width:100px;text-align: right;">{{_rupiah($order->total)}}</td>
      </tr>
      <tr>
        <td colspan="4" align="right"><strong>Delivery Expense</strong></td>
        <td style="width:100px;text-align: center;">
          {{_rupiah($courier->cost[0]->value)}}
        </td>
      </tr>
      <tr>
        <td colspan="4" align="right"><strong>Total</strong></td>
        <td style="width:100px;text-align: right;">{{_rupiah($order->total + $courier->cost[0]->value)}}</td>
      </tr>

  	</tbody>
  </table>
