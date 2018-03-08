@extends('layouts.app')
@section('title', $category->name)


@section('content')

    <div style="margin-top: 10px !important"></div>

    <!--Site-Content-->
    <div id="#content" class="site-content shop-grid">
        <div class="container">
            <!--page title-->
            <div class="page_title_area row">
                <div class="col-md-12">
                    <div class="bredcrumb mar-b-0">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="active"><a href="{{url('/' . $category->slug)}}">{{$category->name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.page title-->

            <div><img src="{{$category->banner}}" width="100%"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-listing-view">

                        <div class="shop-product-list">

                            <div id="paging_container11" class="container">
                                
                                <div class="pad-t-1em pad-b-1em display-IB width-100">
                                </div>

                                <div style="clear:both"></div>

                                <div class="row">
                                    <div class="content-data">
                                        
                                        <div id="category-all-wrapper">
                                            @for($i = 1; $i <= 4; $i++)
                                                <div class="col-md-3 col-sm-6 col-xs-6 pad-0-m">
                                                    <div class="product-single border-ca">
                                                        <div class="product-thumb preloader-default" style="height: 410px;">
                                                            
                                                        </div>
                                                        <!--/.product-thumb-->
                                                        <div class="product-info">
                                                            <h2 class="fs-13-m preloader-default"><a href=""></a></h2>
                                                            <h4 class="product-name fs-12-m preloader-default-100px"></h4>
                                                            <div class="price">
                                                                <div class="preloader-default-80px"></div>
                                                                <span class="vis-xs-IB">
                                                                    <br>
                                                                </span>
                                                                <div class="preloader-blue-80px"></div>
                                                                <span class="vis-xs-IB">
                                                                    <br>
                                                                </span>
                                                                <div class="preloader-red-50px"></div>
                                                            </div>
                                                        </div>
                                                        <!--/.product-info-->
                                                    </div>
                                                    <!--/.product-single-->
                                                </div>
                                            @endfor
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/.container-->
    </div>

@endsection

@section('script')
    
<script>
    $.ajax({
        url: '/ajax-requests/products/category/' + {{$category->id}},
        type: 'POST',
        data: '_token={{csrf_token()}}',
        success: function(res) {
            window.setTimeout(function() {
                $('#category-all-wrapper').replaceWith(res);
            }, 100);
        },
        error: function(err) {
            console.log(err);
        }
    });
</script>

@endsection