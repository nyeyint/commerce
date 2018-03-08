@extends('layouts.app')
@section('title', $post->title . ' - Blog')

@section('meta')

	<meta property="og:title" content="{{$post->title}}">
	<meta property="og:url" content="{{url('/blog/' . $post->slug)}}">
	<meta property="og:image" content="{{url('/' . $post->image)}}">
	<meta property="og:type" content="blog">

	
@endsection

@section('content')
<div id="#content" class="site-content">
        <div class="container">
			
			<div style="margin-top: 50px;"></div>

			<img src="{{url($post->image)}}" alt="" class="img-responsive image-round">

			<h2 class="blog">{{$post->title}}</h2>
				


        </div>

    </div>

@endsection