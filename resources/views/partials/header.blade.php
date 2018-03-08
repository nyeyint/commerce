@include('partials.header-top')
<!-- Header -->
<header>
  <div class="container">
    <div class="logo"> <a href="{{url('/')}}"><img src="{{url(setting('site.logo'))}}" alt="" ></a> </div>
    <div class="search-cate">
      <form action="/search" method="get">
        <select class="selectpicker" name="category">
          <option value="all"> All Categories</option>
          @foreach(product_categories() as $category)
            <option value="{{$category->slug}}">{{$category->name}}</option>
          @endforeach
        </select>
        <input name="q" type="search" placeholder="Search entire store here..." value="{{request()->q != null ? request()->q : ''}}">
        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
      </form>
    </div>

    <!-- Cart Part -->
    <ul class="nav navbar-right cart-pop">
      <li class="dropdown">
        <a href="{{route('cart.index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="itm-cont">{{Cart::count()}}</span>
          <i class="flaticon-shopping-bag"></i>
          <strong>My Cart</strong> <br>
          <span>{{Cart::count()}} item(s) - Rp {{Cart::total()}}</span>
        </a>
        <ul class="dropdown-menu">


          @if(Cart::count() < 1)

            <img src="{{url('/assets/images/cart-empty.png')}}" alt="" class="img-responsive">
            <h5 class="text-center" style="color: #ccc">YOU HAVE NO ITEMS</h5>

          @else
          @foreach(Cart::content() as $cart)
            <li>
              <div class="media-left"> <a href="{{url($cart->model->slug)}}" class="thumb"> <img src="{{getFirstArray($cart->model->images)}}" class="img-responsive" alt="" > </a> </div>
              <div class="media-body"> <a href="{{url($cart->model->slug)}}" class="tittle">{{$cart->model->name}}</a>
                <span>{{($cart->model->is_discount)
                  ? _rupiah($cart->model->price - _percent($cart->model->price, $cart->model->discount_percent))
                  : _rupiah($cart->model->price)}} x {{$cart->qty}}</span>
                </div>
            </li>
          @endforeach

          <li class="btn-cart">
            <a href="{{route('cart.index')}}" class="btn-round" style="color:white;">View Cart</a>
          </li>

          @endif
        </ul>
      </li>
    </ul>
  </div>

  <!-- Nav -->
  <nav class="navbar ownmenu">
    <div class="container">

      <!-- Categories -->
      <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
        <div class="cate-bar-in">
          <div id="cater" class="collapse">
            <ul>
              @foreach(product_categories() as $category)
                <li><a href="{{url($category->slug)}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- Navbar Header -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
      </div>
      <!-- NAV -->
      <div class="collapse navbar-collapse" id="nav-open-btn">
        {!! menu('ecommerce', 'partials.ecommerce_menu') !!}
      </div>

      <!-- NAV RIGHT -->
      <div class="nav-right">

      </div>
    </div>
  </nav>
</header>
