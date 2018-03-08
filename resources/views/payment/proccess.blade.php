<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{setting('site.title')}} - Proccessing Payment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bundle.min.css">
    <style>
    /*  This is just to center the spinner */

    html, body { height: 100%; }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
    }


    .spinner {
      -webkit-animation: rotator 1.4s linear infinite;
    }

    @-webkit-keyframes rotator {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(270deg); }
    }

    .path {
      stroke-dasharray: 187;
      stroke-dashoffset: 0;
      transform-origin: center;
      -webkit-animation:
      dash 1.4s ease-in-out infinite,
      colors 5.6s ease-in-out infinite;
    }

    @-webkit-keyframes colors {
      0% { stroke: #f04e23; }
      45% { stroke: #58595b; }
      50% { stroke: #80c342; }
      75% { stroke: #5bc4bf; }
      100% { stroke: #fdb913; }
    }

    @-webkit-keyframes dash {
      0% { stroke-dashoffset: 187; }
      50% {
      stroke-dashoffset: 46;
      -webkit-transform:rotate(135deg);
      }
      100% {
      stroke-dashoffset: 187;
      -webkit-transform:rotate(450deg);
      }
    }
    </style>
  </head>
  <body>

    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
       <circle class="path" fill="none"  stroke="#f04e23" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>

    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/bundle.min.js"></script>
    <script type="text/javascript">
        window.setTimeout(function() {
          $.ajax({
              url: '{{route('payment.prepare', encrypt(str_random(15)))}}',
              type: 'POST',
              data: '_token={{csrf_token()}}',
              success: function(d) {
                  if(d.url) {
                    return window.location = d.url;
                  }
              },
              error: function(e) {
                  window.location = '{{route('payment.proccess', encrypt(str_random(15)))}}';
              }
          });
        }, 3000);
    </script>
  </body>
</html>
