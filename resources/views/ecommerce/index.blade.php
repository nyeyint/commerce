@extends('layouts.app')
@section('title', 'PT. Budijaya Makmursentosa')

@section('content')


	<!--Slider-area-->
  <section class="slid-sec">
    <div class="row">

      <!-- Main Slider  -->
      <div class="col-md-12 no-padding">

        <!-- Main Slider Start -->
        <div class="tp-banner-container">
          <div class="tp-banner-full">
            <ul>

              @foreach(sliders() as $slide)
                <!-- SLIDE  -->
                <li data-slotamount="7" data-masterspeed="100"  data-saveperformance="off" >
                  <!-- MAIN IMAGE -->
                  <img src="{{url( '/storage/' .''. $slide->image_url)}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/.slider-area-->

  <div id="content">

    <!-- Banner -->
    <section class="disply-sec slid-sec margin-top-40 margin-bottom-0">
      <div class="container">
        <div class="row"> 
          
          <!-- Smartphone -->
          <div class="col-md-6">
            <div class="product">
              <div class="like-bnr ultra">
                <div class="position-center-center">
                  <h5>Valve berkualitas SNI</h5>
                  <h4>ANSI 300 2 Inch</h4>
                  <span class="price">Rp.1.170.000</span> </div>
              </div>
            </div>
          </div>
          
          <!-- Sport -->
          <div class="col-md-6">
            <div class="product">
              <div class="like-bnr ultra-1">
                <div class="position-center-center">
                  <h5>Promo Valve</h5>
                  <h4>PN 40 3/4 Inch</h4>
                  <span class="price">Rp.1.170.000</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
      <div class="container" >

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
          <li role="presentation" class="active">
            <a href="#new-release" aria-controls="new-release" role="tab" data-toggle="tab">New Release</a>
          </li>
          <li role="presentation">
            <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">Sale</a>
          </li>
          @foreach(product_categories() as $category)
            <li role="presentation">
              <a href="#{{$category->slug}}" aria-controls="{{$category->slug}}" role="tab" data-toggle="tab">{{$category->name}}</a>
            </li>
          @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="new-release">
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav owl-carousel" id="new-release-body">
              <!-- Product -->
                @for($i =0; $i<=4; $i++)
                  <div class="product">
                    <article>
                      <div class="preloader-default"></div>
                      <span class="preloader-sale-tag"></span>
                      <span class="preloader-new-tag"></span>

                      <!-- Content -->
                      <span class="preloader-default-80px"></span>
                      <span class="preloader-blue-184px"></span>

                      <div class="price"><div class="preloader-black-50px"></div><span class="preloader-discount-50px "></span></div>
                      <span class="preloader-button-184px"></span>

                    </article>
                  </div>
                @endfor

            </div>
          </div>

          <!-- Special -->
          <div role="tabpanel" class="tab-pane fade" id="sale">
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav owl-carousel" id="sale-body">

              <!-- Product -->
              @for($i =0; $i<=4; $i++)
                <div class="product">
                  <article>
                    <div class="preloader-default"></div>
                    <span class="preloader-sale-tag"></span>
                    <span class="preloader-new-tag"></span>

                    <!-- Content -->
                    <span class="preloader-default-80px"></span>
                    <span class="preloader-blue-184px"></span>

                    <div class="price"><div class="preloader-black-50px"></div><span class="preloader-discount-50px "></span></div>
                    <span class="preloader-button-184px"></span>

                  </article>
                </div>
              @endfor

          </div>

        </div>

        <!-- Category Panel -->
        @foreach(product_categories() as $category)
          <div role="tabpanel" class="tab-pane fade" id="{{$category->slug}}">
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav owl-carousel" id="{{$category->slug}}-body">

              <!-- Product -->
              @for($i =0; $i<=4; $i++)
                <div class="product">
                  <article>
                    <div class="preloader-default"></div>
                    <span class="preloader-sale-tag"></span>
                    <span class="preloader-new-tag"></span>

                    <!-- Content -->
                    <span class="preloader-default-80px"></span>
                    <span class="preloader-blue-184px"></span>

                    <div class="price"><div class="preloader-black-50px"></div><span class="preloader-discount-50px "></span></div>
                    <span class="preloader-button-184px"></span>

                  </article>
                </div>
              @endfor

          </div>

        </div>
        @endforeach

      </div>
    </section>

    <!-- Main Tabs Sec -->
    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
      <div class="container">
        <ul class="nav margin-bottom-40" role="tablist">
          @foreach(product_categories() as $category)
            <li role="presentation" class="@if($loop->first) {{$active = 'active'}} @endif">
              <a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab"> 

                <img class="img-responsive product-category-icon" src="{{ $category->banner }}" alt="valve"> 
                </br>
                {{$category->name}}
                <span>236 item(s)</span>
              </a>
            </li>
          @endforeach
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- TV & Audios -->
          <div role="tabpanel" class="tab-pane active fade in" id="tv-au"> 
            
            <!-- Items -->
            <div class="item-slide-5 with-bullet no-nav owl-carousel" id="item-with-icon"> 
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 </div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
                            
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 <span>$200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
            </div>
          </div>
          
          <!-- Smartphones -->
          <div role="tabpanel" class="tab-pane fade" id="smart"> 
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-17.jpg" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
          <!-- Desk & Laptop -->
          <div role="tabpanel" class="tab-pane fade" id="deks-lap"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-13.jpg" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
          <!-- Game Console -->
          <div role="tabpanel" class="tab-pane fade" id="game-com"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
          <!-- Watches -->
          <div role="tabpanel" class="tab-pane fade" id="watches"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-17.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
          <!-- Accessories -->
          <div role="tabpanel" class="tab-pane fade" id="access"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="images/item-img-1-14.jpg" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Shipping Info -->
    <section class="shipping-info margin-top-40">
      <div class="container">
        <ul>

          <!-- Free Shipping -->
          <li>
            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
            <div class="media-body">
              <h5>Free Shipping</h5>
              <span>On order over $99</span></div>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
            <div class="media-body">
              <h5>Money Return</h5>
              <span>30 Days money return</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="flaticon-operator"></i> </div>
            <div class="media-body">
              <h5>Support 24/7</h5>
              <span>Hotline: (+100) 123 456 7890</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body">
              <h5>Safe Payment</h5>
              <span>Protect online payment</span></div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Top Selling Week -->
    <section class="padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Berita BJMS Group</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav owl-carousel"> 
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the power to take your business to the
              next level. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection

@section('script')

    <script>

        let carouselOptions = {
          items : 5,
          autoplay:false,
          loop:false,
          margin: 30,
          autoplayTimeout:5000,
          autoplayHoverPause:true,
          navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
          lazyLoad:true,
          nav: true,
          responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:4,
                },
            1200:{
                    items:5,
                }
            },
          animateOut: 'fadeOut'
        }

        $(document).ready(function() {

          $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
              let tab = e.target.hash.substring(1);
              let tab_body = tab + '-body';
              let protected = [
                  'sale', 'new-release'
              ];

              return (!in_array(tab, protected))
                  ? updateCategory(tab, tab_body)
                  : updateProduct(tab, tab_body);

          });

          $.ajax({
              url: '/ajax-requests/products',
              type: 'POST',
              data: '_token={{csrf_token()}}',
              success: function(res) {
                  window.setTimeout(function() {

                    let html = '<div class="item-slide-5 with-nav owl-carousel" id="new-release-body">';
                    html += res;
                    html += '</div>';

                    $('#new-release-body').replaceWith(html);
                    $("#new-release-body").owlCarousel(carouselOptions);
                  }, 3000);
              },
              error: function(err) {
                  console.log(err);
              }

          });

          $("#item-with-icon").owlCarousel(carouselOptions);
          $("#blog-slide").owlCarousel(carouselOptions);


          function updateCategory(parent, body) {
            console.log('updateCategory: ' + parent);
              $.ajax({
                  url: '/ajax-requests/products/category/' + parent,
                  type: 'POST',
                  data: '_token={{csrf_token()}}',
                  success: function(res, text, xhr) {
                    window.setTimeout(function() {

                      if(xhr.status == '204') {
                          $('#' + body).replaceWith('<h1 style="text-align:center;">NO PRODUCTS FOUND</h1>');
                      }

                      let html = '<div class="item-slide-5 with-nav owl-carousel" id="' + body + '">';
                      html += res;
                      html += '</div>';

                      $("#" + body).replaceWith(html);
                      $("#" + body).owlCarousel(carouselOptions);
                    }, 3000);
                  },
                  error: function(err) {
                      console.log(err);
                  }
              });
          }

        });

        function updateProduct(parent, body) {
          console.log('updateProduct: ' + parent);
            if(parent == 'sale') {
              $.ajax({
                  url: '/ajax-requests/products/sale',
                  type: 'POST',
                  data: '_token={{csrf_token()}}',
                  success: function(res, text, xhr) {
                    window.setTimeout(function() {

                      if(res.status == '204') {
                          $('#' + body).replaceWith('<h1 style="text-align:center;">NO PRODUCTS FOUND</h1>');
                      }

                      let html = '<div class="item-slide-5 with-nav owl-carousel" id="' + body + '">';
                      html += res;
                      html += '</div>';

                      $('#' + body).replaceWith(html);
                      $("#" + body).owlCarousel(carouselOptions);
                    }, 3000);
                  },
                  error: function(err) {
                      console.log(err);
                  }
              });
            }
        }



    </script>

@endsection
