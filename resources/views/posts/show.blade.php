@extends ('layout')


@section ('css')

<link href="/css/article.css" rel="stylesheet">

@endsection


@section ('content')

<!-- Title -->
<h1 class="mt-4"> {{ $post->title }} </h1>

<!-- Author -->
<p class="lead">
  by
  <a href="#">Start Bootstrap</a>
</p>

<hr>

<!-- Date/Time -->
<p>{{ $post->updated_at->toFormattedDateString() }}</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="{{ $post->picture }}" alt="">

<hr>

<!-- Post Content -->
 <h6>{{ $post->body }}</h6>

<hr>

@include ('layouts.comments')

@endsection
