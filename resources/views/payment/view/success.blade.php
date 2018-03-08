@extends('checkout.master', ['simple' => true])
@section('title', 'Thank You')

@section('css')
<style media="screen">
svg {
width: 100px;
display: block;
margin: 40px auto 0;
}
.path {
stroke-dasharray: 1000;
stroke-dashoffset: 0;
}
.path.circle {
-webkit-animation: dash 1s ease-in-out;
animation: dash 1.4s ease-in-out;
}
.path.line {
stroke-dashoffset: 1000;
-webkit-animation: dash 0.9s 0.35s ease-in-out forwards;
animation: dash 0.9s 0.35s ease-in-out forwards;
}
.path.check {
stroke-dashoffset: -100;
-webkit-animation: dash-check 0.9s 0.35s ease-in-out forwards;
animation: dash-check 0.9s 0.35s ease-in-out forwards;
}
p {
text-align: center;
/* margin: 20px 0 60px; */
font-size: 1.25em;
}
p.success {
color: #73AF55;
}
p.error {
color: #D06079;
}
@-webkit-keyframes dash {
0% {
stroke-dashoffset: 1000;
}
100% {
stroke-dashoffset: 0;
}
}
@keyframes dash {
0% {
stroke-dashoffset: 1000;
}
100% {
stroke-dashoffset: 0;
}
}
@-webkit-keyframes dash-check {
0% {
stroke-dashoffset: -100;
}
100% {
stroke-dashoffset: 900;
}
}
@keyframes dash-check {
0% {
stroke-dashoffset: -100;
}
100% {
stroke-dashoffset: 900;
}
}


</style>
@endsection

@section('content')

  <!--[if lte IE 9]>
    <style>
      .path {stroke-dasharray: 0 !important;}
    </style>
  <![endif]-->

  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
  </svg>
  <div class="form-group">

  </div>
  <h1 class="text-center" style="color:#227491;">Thanks for your purchase!</h1>
  <p>Your orders is being proccessed & we'll let you know if your orders  has been shipped.</p>

@endsection
