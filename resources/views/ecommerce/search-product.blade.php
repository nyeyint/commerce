@extends('layouts.app')
@section('title', 'Search Result for ' . request()->q)

@section('meta')

{{--  <meta property="og:url" content="{{URL::current()}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$item->name}} - {{env('APP_NAME')}}" />
<meta property="og:description" content="{{$item->short_description}}" />
<meta property="og:image" content="{{url(getFirstArray($item->images))}}" />  --}}


@endsection

@section('content')

  <!-- Linking -->
  <div class="linking" style="margin-top: 70px;">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url()->current()}}">Search result for <b>{{request()->q}}</b>...</a></li>
        <li class="active"></li>
      </ol>
    </div>
  </div>

  <div class="content">
    @include('partials.filter')


          <!-- Products -->
          <div class="col-md-9">

            <!-- Short List -->
            <div class="short-lst">
            <h2>Search result for: <b><i>{{request()->q}}...</b></i></h2>
              <ul>
                <!-- Short List -->
                <li>
                  <p>Showing 1–{{$product->count()}} of {{$product->total()}} results.</p>
                </li>
                <!-- by Default -->
                <li>
                  <select class="selectpicker" id="filterBy">
                    <option value="price">Sort by Price </option>
                    <option value="newest">Sort by Newest </option>
                    <option value="oldest">Sort by Oldest </option>
                  </select>
                </li>

                <!-- Grid Layer -->
                <li class="grid-layer">
                    <a href="#." id="product_list_wrapper"><i class="fa fa-list margin-right-10"></i></a>
                    <a href="#." id="product_grid_wrapper"><i class="fa fa-th"></i></a> </li>
              </ul>
            </div>

            <!-- Items -->
           <div id="dummy_items">
                <div style="display:none" id="product_col_grid" class="item-col-3 dummy-wrapper">
                        @for($i =0; $i <=setting('ecommerce.product_limit'); $i++)
                            <div class="product">
                              <article>
                                <div class="preloader-default"></div>
                                <span class="preloader-sale-tag"></span>
                                <span class="preloader-new-tag"></span>

                                <!-- Content -->
                                <span class="preloader-default-80px"></span>
                                <span class="preloader-blue-184px"></span>

                                <div class="price"><div class="preloader-black-135px"></div><span class="preloader-discount-96px "></span></div>
                                <span class="preloader-button-184px"></span>

                              </article>
                            </div>
                        @endfor


                      <!-- pagination -->
                      {{--  <ul class="pagination">
                        <li><a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                      </ul>  --}}
                    </div>

                    <div id="product_col_list" class="col-list dummy-wrapper">
                        <div class="product">
                            <article>
                                <!-- Product img -->
                                <div class="media-left">
                                    <div class="preloader-default-300px"></div>
                                </div>
                                <!-- Content -->
                                <div class="media-body">
                                    <div class="row">
                                        <!-- Content Left -->
                                        <div class="col-sm-7">
                                            <span class="preloader-default-100-15px"></span>
                                            <div class="preloader-blue-184px"></div>
                                            <!-- Reviews -->
                                            <p class="rev">
                                            <div class="preloader-yellow-50px"></div>
                                            <div class="preloader-red-50px"></div>
                                            </p>
                                            <ul class="bullet-round-list">
                                            @for($i = 4; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            </ul>
                                        </div>
                                        <!-- Content Right -->
                                        <div class="col-sm-5 ">
                                            @for($i = 6; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            <div style="margin-top: 20%;">
                                            <div class="preloader-black-200px"></div>
                                            <br />
                                            <div class="preloader-default-availablility"></div>
                                            <div class="preloader-default-availablility-yes"></div>
                                            <br />
                                            <div class="preloader-button-200px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="product">
                            <article>
                                <!-- Product img -->
                                <div class="media-left">
                                    <div class="preloader-default-300px"></div>
                                </div>
                                <!-- Content -->
                                <div class="media-body">
                                    <div class="row">
                                        <!-- Content Left -->
                                        <div class="col-sm-7">
                                            <span class="preloader-default-100-15px"></span>
                                            <div class="preloader-blue-184px"></div>
                                            <!-- Reviews -->
                                            <p class="rev">
                                            <div class="preloader-yellow-50px"></div>
                                            <div class="preloader-red-50px"></div>
                                            </p>
                                            <ul class="bullet-round-list">
                                            @for($i = 4; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            </ul>
                                        </div>
                                        <!-- Content Right -->
                                        <div class="col-sm-5 ">
                                            @for($i = 6; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            <div style="margin-top: 20%;">
                                            <div class="preloader-black-200px"></div>
                                            <br />
                                            <div class="preloader-default-availablility"></div>
                                            <div class="preloader-default-availablility-yes"></div>
                                            <br />
                                            <div class="preloader-button-200px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="product">
                            <article>
                                <!-- Product img -->
                                <div class="media-left">
                                    <div class="preloader-default-300px"></div>
                                </div>
                                <!-- Content -->
                                <div class="media-body">
                                    <div class="row">
                                        <!-- Content Left -->
                                        <div class="col-sm-7">
                                            <span class="preloader-default-100-15px"></span>
                                            <div class="preloader-blue-184px"></div>
                                            <!-- Reviews -->
                                            <p class="rev">
                                            <div class="preloader-yellow-50px"></div>
                                            <div class="preloader-red-50px"></div>
                                            </p>
                                            <ul class="bullet-round-list">
                                            @for($i = 4; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            </ul>
                                        </div>
                                        <!-- Content Right -->
                                        <div class="col-sm-5 ">
                                            @for($i = 6; $i <= 10; $i++)
                                            <div class="preloader-list-{{rand(6,10)}}0-percent"></div>
                                            @endfor
                                            <div style="margin-top: 20%;">
                                            <div class="preloader-black-200px"></div>
                                            <br />
                                            <div class="preloader-default-availablility"></div>
                                            <div class="preloader-default-availablility-yes"></div>
                                            <br />
                                            <div class="preloader-button-200px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
           </div>

           <div id="items_outer">
                <div id="item_inner">

                </div>
           </div>

          </div>
        </div>
      </div>
    </section>


  </div>

@endsection

@section('script')

<script>
    $(document).ready(function() {
        reformat();
        let cook = Cookies;
        if(cook.get('_pdp') == 'undefined') {
            cook.set('_pdp', 'grid');
        }


        $('#product_list_wrapper').on('click', function(e) {
            e.preventDefault();
            if(cook.get('_pdp') != 'list') {
                // set _pdp to list
                cook.set('_pdp', 'list');
                $(this).addClass('active');
                $('#product_grid_wrapper').removeClass('active');
                // update product layout to list
                if(cook.get('_ct') == 'dummy') {
                    $('.dummy-wrapper').each(function(i, d) {
                        let tag = $(d);
                        if(tag.attr('id') == 'product_col_grid') {
                            tag.hide();
                        }
                        else if(tag.attr('id') == 'product_col_list')
                        {
                            tag.show();
                        }
                    });
                }
                else
                {
                    $('#product_col_grid_real').hide();
                    $('#product_col_list_real').show();
                    $('.dummy-wrapper').each(function(i, d) {
                        let tag = $(d);
                        if(tag.attr('id') == 'product_col_grid') {
                            tag.hide();
                        }
                        else if(tag.attr('id') == 'product_col_list')
                        {
                            tag.show();
                        }
                    });
                }

            }
        });
        $('#product_grid_wrapper').on('click', function(e) {
            e.preventDefault();
            if(cook.get('_pdp') != 'grid') {
                // set _pdp to list
                cook.set('_pdp', 'grid');
                $(this).addClass('active');
                $('#product_list_wrapper').removeClass('active');
                // update product layout to grid
                if(cook.get('_ct') == 'dummy') {
                    $('.dummy-wrapper').each(function(i, d) {
                        let tag = $(d);
                        if(tag.attr('id') == 'product_col_list') {
                            tag.hide();
                        }
                        else if(tag.attr('id') == 'product_col_grid')
                        {
                            tag.show();
                        }
                    });
                }
                else
                {
                    $('#product_col_list_real').hide();
                    $('#product_col_grid_real').show();
                    $('.dummy-wrapper').each(function(i, d) {
                        let tag = $(d);
                        if(tag.attr('id') == 'product_col_list') {
                            tag.hide();
                        }
                        else if(tag.attr('id') == 'product_col_grid')
                        {
                            tag.show();
                        }
                    });
                }
            }
        });


        let param = '_init={{str_random(20)}}&_token={{csrf_token()}}&';
        $.each(parseQuery(), function(i, d){
            param += i + '=' + d + '&';
        });

        $.ajax({
            url: '{{route("ecommerce.search_api")}}',
            type: 'POST',
            data: param,
            success: function(d) {
                $('#dummy_items').hide();
                $('#item_inner').html(d);
                // apend resut to body
            },
            error: function(e) {
                // display error
            }
        });

        // filter manager
        $('#filterBy').on('changed.bs.select', function(e) {
            let param = '_init={{str_random(20)}}&_token={{csrf_token()}}&';
            $.each(parseQuery(), function(i, d){
                param += i + '=' + d + '&';
            });

            $.ajax({
                url: '{{route("ecommerce.search_api")}}',
                type: 'POST',
                data: param,
                beforeSend: function() {
                    $('#item_inner').html('');
                    $('#dummy_items').show();
                },
                success: function(d) {
                    $('#dummy_items').hide();
                    $('#item_inner').html(d);
                    reformat();
                    // apend resut to body
                },
                error: function(e) {
                    // display error
                }
            });
        });

    });
</script>

@endsection
