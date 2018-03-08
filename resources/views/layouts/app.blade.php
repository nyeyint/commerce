<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description" content="{{setting('site.description')}}">

    <title>{{ setting('site.title') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/' . setting('site.favicon'))}}" type="image/x-icon">
    <link rel="icon" href="{{url('/' . setting('site.favicon'))}}" type="image/x-icon">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/assets/rs-plugin/css/settings.css" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/jquery.floating-social-share.min.css">
    
    <!-- Fonts Online -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="/assets/js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/bundle.min.css">
    <link rel="stylesheet" href="/assets/css/bjms.css">

    @yield('css')

</head>

<body>

  <div id="wrap" class="layout-1">


    @include('partials.header')

        @yield('content')

    @include('partials.footer')

  </div>

      <!-- GO TO TOP  -->
      <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
      <!-- GO TO TOP End -->
    </div>
    <!-- End Page Wrapper -->

    <!-- JavaScripts -->
    <script type="text/javascript" src="/assets/js/vendors/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/vendors/wow.min.js"></script>
    <script type="text/javascript" src="/assets/js/vendors/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/vendors/own-menu.js"></script>
    <script type="text/javascript" src="/assets/js/vendors/jquery.sticky.js"></script>
    <script type="text/javascript" src="/assets/js/vendors/owl.carousel.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="/assets/rs-plugin/js/jquery.tp.t.min.js"></script>
    <script type="text/javascript" src="/assets/rs-plugin/js/jquery.tp.min.js"></script>
    <script type="text/javascript" src="/assets/rs-plugin/js/jquery.tp.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>

    <script type="text/javascript" src="/js/bundle.min.js"></script>

    <script type="text/javascript" src="/assets/js/vendors/jquery.floating-social-share.min.js"></script>
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>

    <script>

    window.fbAsyncInit = function() {
      FB.init({
        appId            : '149090949192399',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v2.11'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    </script>
    <script>
        $("body").floatingSocialShare({
          buttons: ["facebook", "twitter", "whatsapp", "mail"],
          text: {
            'facebook': 'Share on Facebook',
            'twitter': 'Share on Twitter',
            'whatsapp': 'Share on WA',
            'mail': 'Send us an email'
          }
        });

        $("#floatingSocialShare .whatsapp").attr("href", "https://api.whatsapp.com/send?phone=6282160307043&text=Hi%20BJMS,%20saya%20mau%20bertanya")
        $("#floatingSocialShare .mail").attr("href", "mailto:no-reply@bjmsgroup.com?subject=Saya ingin bertanya..");

      $('[data-toggle="tooltip"]').tooltip();

      window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
          t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
          t._e.push(f);
        };

        return t;
      }(document, "script", "twitter-wjs"));
    </script>
    <script>
        @if(session()->has('error'))
            swal('Oops!', '{{session()->get('error')}}', 'error');
        @elseif(session()->has('success'))
            swal('Success!', '{{session()->get('success')}}', 'success');
        @else

        @endif
    </script>

    {!! setting('site.chat_widget') !!}

    @yield('script')

</body>

</html>
