@extends('layouts.app')
@section('title', $item->name)

@section('meta')

<meta property="og:url" content="{{URL::current()}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$item->name}} - {{env('APP_NAME')}}" />
<meta property="og:description" content="{{$item->short_description}}" />
<meta property="og:image" content="{{url(getFirstArray($item->images))}}" />


@endsection

@section('content')

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{product_category($item->category_id)->slug}}">{{product_category($item->category_id)->name}}</a></li>
        <li class="active">{{$item->name}}</li>
      </ol>
    </div>
  </div>

  <div class="content">
    @include('partials.filter')

    <!-- Products -->
    <div class="col-md-9">
      <div class="product-detail">
        <div class="product">
          <div class="row">
            <!-- Slider Thumb -->
            <div class="col-xs-5">
              <article class="slider-item on-nav">
                <div class="thumb-slider">
                  <ul class="slides">
                    @foreach (json_decode($item->images) as $image)

                      <li data-thumb="{{url($image)}}">
                        <img src="{{url($image)}}" alt="" >
                      </li>
                    @endforeach
                  </ul>
                </div>
              </article>
            </div>
            <!-- Item Content -->
            <div class="col-xs-7"> <span class="tags">{{product_category($item->category_id)->name}}</span>
              <h5>{{$item->name}}</h5>
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="row">
                <div class="col-sm-6">
                  @if($item->is_discount)
                    <span class="price">{{_rupiah($item->price - _percent($item->price, $item->discount_percent))}}</span>
                    <span style="color: #888888"><del>{{_rupiah($item->price)}}</del></span>
                  @endif

                </div>
                <div class="col-sm-6">
                  <p>Availability: {!! $item->quantity > 0 ? '<span class="in-stock">In stock</span>' : '<span class="not-in-stock">Out Of Stock</span>' !!}</p>
                </div>
              </div>
              <!-- List Details -->
              <div class="" style="padding: 10px;">
                Description:
                  {!! $item->long_description !!}
              </div>

              <!-- Compare Wishlist -->
              <ul class="cmp-list">
                <li><a href="#."><i class="fa fa-heart"></i> Add to Wishlist</a></li>
                <li><a href="#."><i class="fa fa-navicon"></i> Add to Compare</a></li>
                <li><a href="#."><i class="fa fa-envelope"></i> Email to a friend</a></li>
              </ul>
              <!-- Quinty -->
              <div class="quinty">
                <input type="number" value="01">
              </div>
              <a href="#." class="btn-round"><i class="icon-basket-loaded margin-right-5"></i> Add to Cart</a> </div>
          </div>
        </div>

        <!-- Details Tab Section-->
        <div class="item-tabs-sec">

          <!-- Nav tabs -->
          <ul class="nav" role="tablist">
            <li role="presentation" class="active"><a href="#pro-detil"  role="tab" data-toggle="tab">Product Details</a></li>
            <li role="presentation"><a href="#cus-rev"  role="tab" data-toggle="tab">Customer Reviews</a></li>
            <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping & Payment</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
              <!-- List Details -->
              <ul class="bullet-round-list">
                <li>Power Smartphone 7s G930F 128GB International version - Silver</li>
                <li> 2G bands: GSM 850 / 900 / 1800 / 1900 3G bands: HSDPA 850 / 900 / 1900 / 2100 4G bands: LTE 700 / 800 / 850<br>
                  900 / 1800 / 1900 / 2100 / 2600</li>
                <li> Dimensions: 142.4 x 69.6 x 7.9 mm (5.61 x 2.74 x 0.31 in) Weight 152 g (5.36 oz)</li>
                <li> IP68 certified - dust proof and water resistant over 1.5 meter and 30 minutes</li>
                <li> Internal: 128GB, 4 GB RAM </li>
              </ul>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Carrier</th>
                      <th>Compatibility Rating </th>
                      <th>Voice / Text </th>
                      <th>Voice / Text </th>
                      <th>2G Data </th>
                      <th>3G Data </th>
                      <th>4G LTE Data </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AT&T </td>
                      <td>Fully Compatible</td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr>
                      <td>Sprint </td>
                      <td>No Voice/Text and Partial Data Connection</td>
                      <td class="text-center"></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                      <td>Q-Mobile </td>
                      <td>Partial Data Connection</td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                      <td>Verizon Wireless </td>
                      <td>No Votice/Text and Partial Data Connection</td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                      <td class="text-center"><i class="fa fa-check"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
            <div role="tabpanel" class="tab-pane fade" id="ship"></div>
          </div>
        </div>
      </div>
    </section>


  </div>

@endsection

@section('script')

    <script>

      $(document).ready(function() {
          $('#fb-share').on('click', function() {
            FB.ui({
                method: 'feed',
                name: '{{$item->name}}',
                link: '{{URL::current()}}',
                picture: '{{url(getFirstArray($item->images))}}',
                description: '{{$item->short_description}}'
            });
          });

          $('#tw-share').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;

            window.open(url, 'twitter', opts);

            return false;
          });
      });

    </script>

@endsection
