@php 
$request = request();
unset($request['_init']);
unset($request['_token']);
@endphp
@if($products->count() < 1)
<br>
<h1 class="text-center">NO PRODUCTS FOUND</h1>
@else
<div style="display:none" id="product_col_grid_real" class="item-col-3"> 
@foreach($products as $product)
    @php
        $globalId = str_random(10);
    @endphp

    <div class="product">
      <article>
        <img class="img-responsive" src="{{getFirstArray($product->images)}}" alt="" >
        {!! ($product->is_discount) ? '<span class="sale-tag">-' . $product->discount_percent . '</span>' : '' !!}
        {!! (strtotime($product->created_at) <= strtotime('1 week ago') ) ? '' : '<span class="new-tag">New</span>' !!}

        <!-- Content -->
        <span class="tag">{{product_category($product->category_id)->name}}</span> <a href="#." class="tittle">{{$product->name}}</a>
        <!-- Reviews -->
        @if($product->is_discount)
          <div class="price">
              {{_rupiah($product->price - _percent($product->price, $product->discount_percent))}}
              <span>{{_rupiah($product->price)}}</span>
          </div>
        @else
          <div class="price">{{_rupiah($product->price)}}</div>
        @endif

        <a data-id="{{encrypt($product->id)}}" data-dom="{{str_random(10)}}" class="cart-btn" ><i class="icon-basket-loaded"></i> Add To Cart</a>
        </article>
    </div>

@endforeach
 <!-- pagination -->
      {{--  <ul class="pagination">
        <li><a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
      </ul>  --}}
{!! $products->appends($request->all())->links() !!}
</div>
<div id="product_col_list_real" class="col-list"> 
@foreach($products as $product)
    @php
        $globalId = str_random(10);
    @endphp

<div class="product">
        <article>                   
          <!-- Product img -->
          <div class="media-left">
            <div class="item-img"> 
                <img class="img-responsive" src="{{getFirstArray($product->images)}}" alt="" >  
                {!! ($product->is_discount) ? '<span class="sale-tag">-' . $product->discount_percent . '</span>' : '' !!}
        {!! (strtotime($product->created_at) <= strtotime('1 week ago') ) ? '' : '<span class="new-tag">New</span>' !!}
            </div>
          </div>                  
          <!-- Content -->
          <div class="media-body">
            <div class="row">                       
              <!-- Content Left -->
              <div class="col-sm-7"> 
                  <span class="tag">{{product_category($product->category_id)->name}}</span> 
                  <a href="{{url('/' . $product->slug)}}" class="tittle">{{$product->name}}</a> 
                <!-- Reviews -->
                {{$product->short_description}}
              </div>                      
              <!-- Content Right -->
              <div class="col-sm-5 text-center"> <a href="#." class="heart"><i class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i class="fa fa-navicon"></i></a>
                <div class="position-center-center">
                    @if($product->is_discount)
                        <div class="price">
                            {{_rupiah($product->price - _percent($product->price, $product->discount_percent))}}
                            <span>{{_rupiah($product->price)}}</span>
                        </div>
                    @else
                        <div class="price">{{_rupiah($product->price)}}</div>
                    @endif
                  <p>Availability: {!! $product->quantity > 0 ? '<span class="in-stock">In stock</span>' : '<span class="not-in-stock">Out Of Stock</span>' !!}</p>
                 <a data-id="{{encrypt($product->id)}}" data-dom="{{str_random(10)}}" class="btn-round cart-btn-round" ><i class="icon-basket-loaded"></i> Add To Cart</a>
              </div>
            </div>
          </div>
        </article>
      </div>
@endforeach

{!! $products->appends($request->all())->links() !!}
</div>
@endif
