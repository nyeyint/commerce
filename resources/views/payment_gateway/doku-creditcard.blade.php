<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Redirecting...</title>
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <style media="screen">
    .btn-link{
        border:none;
        outline:none;
        background:none;
        cursor:pointer;
        color:#0000EE;
        padding:0;
        text-decoration:underline;
        font-family:inherit;
        font-size: inherit;
    }
    </style>
  </head>
  <body>

      <form class="postPayment" action="{{$url}}" method="post">
        @foreach ($data as $k => $v)
          <input type="hidden" name="{{$k}}" value="{{$v}}">
        @endforeach
        If you are not redirected in 5 seconds, please click <button type="submit" class="btn-link" name="button">here.</button>
      </form>

      <script>
        $(document).ready(function() {
            $('.postPayment').submit()
        });
      </script>
  </body>
</html>
