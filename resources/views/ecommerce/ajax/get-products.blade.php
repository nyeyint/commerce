@if($products->count() < 1)
    <br>
    <h1 class="text-center">NO PRODUCTS FOUND</h1>
@else
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

            <a data-id="{{encrypt($product->id)}}" data-dom="{{str_random(10)}}" class="cart-btn" ><i class="icon-basket-loaded"></i> Add To Carts</a>
            </article>
        </div>

    @endforeach
@endif
