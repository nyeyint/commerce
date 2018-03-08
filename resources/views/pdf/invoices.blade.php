<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <title>Invoice</title>
</head>

<body style="font-family: open sans, tahoma, sans-serif; margin: 0; -webkit-print-color-adjust: exact">

    @if($data['order']->status == 'shipped' || $data['order']->status == 'paid' || $data['order']->status == 'waiting shipment')

      <div style="
      background: url({{public_path('/css/images/paid-stamp.png')}}) center no-repeat;
      background-size: contain;
      width: 750px;
      ">
    @else

      <div style="
      background: url({{public_path('/css/images/unpaid-stamp.png')}}) center no-repeat;
      background-size: contain;
      width: 750px;
      ">
    @endif

    <table width="790" cellspacing="0" cellpadding="0" class="container" style="width: 790px; padding: 20px;">
        <tr>
            <td>
                <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding-bottom: 20px;">
                    <tbody>
                        <tr style="margin-top: 8px; margin-bottom: 8px;">
                            <td>
                                <img src="{{storage_path('/app/public/' . setting('site.logo'))}}" alt="{{setting('site.name')}}">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding-bottom: 20px;">
                  <tbody>
                      <tr style="font-size: 20px; font-weight: 600;">
                          <td style="padding-bottom: 5px;">
                              <span>Invoice</span>
                          </td>
                      </tr>
                      <tr>
                          <td style="padding-right: 10px;">
                              <table style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0">
                                  <tr style="font-size: 13px;">
                                      <td>
                                          <table style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                  <tr>
                                                      <td style="padding: 3px 0;">{{setting('site.title')}}</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  <tr style="font-size: 13px;">
                                      <td>
                                          <table style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                  <tr style="max-width: 200px !important;">
                                                      <td style="padding: 3px 0;">{!!setting('ecommerce.office_address_1')!!}</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>
                                  <tr style="font-size: 13px;">
                                      <td>
                                          <table style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                  <tr>
                                                      <td style="padding: 3px 0;">{{$data['order']->created_at->format('d M Y')}}</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </td>
                                  </tr>

                              </table>
                          </td>
                      </tr>
                  </tbody>

                </table>


                <table style="width: 100%; text-align: center; border-top: 1px solid rgba(0,0,0,0.1); border-bottom: 1px solid rgba(0,0,0,0.1); padding: 15px 0px;" width="100%" cellspacing="0" cellpadding="0">
                    <thead style="font-size: 14px;">
                        <tr>
                          <th style="font-weight: 600; text-align: left; padding: 10px 5px 15px 15px;">Product Name</th>
                          <th style="width: 120px; font-weight: 600; padding: 10px 5px 15px;" width="120">Quantity</th>
                          <th style="width: 65px; font-weight: 600; padding: 10px 5px 15px;" width="65">Weight</th>
                          <th style="width: 115px; font-weight: 600; padding: 10px 5px 15px;" width="115">Price</th>
                          <th style="width: 115px; font-weight: 600; text-align: right; padding: 10px 30px 15px 5px;" width="115">Subtotal</th>
                        </tr>
                      </thead>
                    <tbody>


                        @foreach($data['order']->details()->get() as $orderDetails)
                          @php
                              $item = product_details($orderDetails->item_id);
                          @endphp
                          <tr style="font-size: 13px;">
                              <td style="text-align: left; padding: 8px 5px 8px 15px;">
                                {{$item->name}}
                              </td>
                              <td style="width: 120px; padding: 8px 5px;" width="120">{{$orderDetails->quantity}}</td>
                              <td style="width: 65px; padding: 8px 5px;" width="65">{{$item->weight / 1000}} kg </td>
                              <td style="width: 115px; padding: 8px 5px;" width="115">{{_rupiah($item->price)}}</td>
                              <td style="width: 115px; text-align: right; padding: 8px 30px 8px 5px;" width="115">{{_rupiah($orderDetails->total)}}</td>
                          </tr>
                        @endforeach


                        <tr style="font-size: 13px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                            <td colspan="4" style="font-weight: 600; text-align: left; padding: 8px 5px 8px 15px;">Subtotal</td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115">{{_rupiah($data['order']->total)}}</td>
                        </tr>

                    </tbody>
                </table>
                 <table style="width: 100%; text-align: center; padding: 15px 0;" width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr style="font-size: 13px;">
                            @php
                              $courier = json_decode($data['order']->shipping_method);
                            @endphp
                            <td style="font-weight: 600; text-align: left; padding: 8px 0 8px 15px;">{{strtoupper($courier->courier_name)}} - {{($courier->courier_name == 'jne') ? jne_formatter($courier->service) : $courier->service}}</td>
                            <td style="width: 120px; padding: 8px 5px;" width="120"></td>
                            <td style="width: 65px; padding: 8px 5px;" width="65">{{order_weight($data['order']) / 1000}} kg</td>
                            <td style="width: 115px; padding: 8px 5px;" width="115"></td>
                            <td style="width: 115px; text-align: right; padding: 8px 30px 8px 5px;" width="115">{{_rupiah($courier->cost[0]->value)}}</td>
                        </tr>

                        <tr style="font-size: 13px; background-color: rgba(0,0,0,0.1);" bgcolor="#F1F1F1">
                            <td colspan="4" style="font-weight: 600; text-align: left; padding: 8px 5px 8px 15px;">Subtotal</td>
                            <td style="width: 115px; font-weight: 600; text-align: right; padding: 8px 30px 8px 5px;" width="115">{{_rupiah($courier->cost[0]->value)}}</td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; padding: 0 0 20px;">
                    <tbody>
                        <tr>
                            <td width="35%" valign="top" style="width: 35%; vertical-align: top; padding-right: 5px;"></td>
                            <td width="65%" valign="top" style="width: 65%; vertical-align: top; padding-left: 5px;">
                                <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border-collapse: collapse;">
                                    <tr bgcolor="#F1F1F1" style="font-size: 15px; color: @if($data['order']->status == 'shipped' || $data['order']->status == 'paid' || $data['order']->status == 'waiting shipment') #42B549 @else #ff0044 @endif; background-color: rgba(0,0,0,0.1);">
                                        <td style="padding: 15px 0 15px 30px; font-weight: 600;">Total</td>
                                        <td style="padding: 15px 30px 15px 0; font-weight: 600; text-align: right; ">{{_rupiah($data['order']->total + $courier->cost[0]->value)}}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="35%" valign="top" style="width: 35%; vertical-align: top; padding-right: 5px;"></td>
                            <td width="65%" valign="top" style="width: 65%; vertical-align: top; padding-left: 5px;">
                                <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="width: 100%; border-collapse: collapse;">







                                </table>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <table width="100%" cellspacing="0" cellpadding="0" style="width: 100%; border-top: 1px dashed #DDD; padding: 25px 0px;">
                    <thead>


                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-size: 13px; line-height: 20px; padding: 10px 0;">
                                @php
                                  $address = json_decode($data['order']->shipping_address);
                                @endphp
                                <h3 style="font-size: 15px; font-weight: 600; margin: 0;">Shipping Address</h3>

                                <p style="font-size: 14px; font-weight: 600; padding-bottom: 5px; margin: 0;">{{$data['user']->name}}</p>
                                {{$address->street}}
                                <br> {{$address->city_label}}, {{$address->subdistrict_label}}, {{$address->post_code}}
                                <br> {{$address->province_label}}
                                <br>


                                         {{@$data['user']->phone->number}}

                            </td>
                            <td style="font-size: 13px; line-height: 20px; padding: 10px 0;" width="50%" valign="top">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    </div>
</body>

</html>
