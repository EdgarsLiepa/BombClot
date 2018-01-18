@extends ('home_layout')


@section ('home.css')

<link href="/css/starter-template.css" rel="stylesheet">

@endsection


@section ('content')
<div class="starter-template">
  <h1>Bomba Clot Worlds Most Relevant Hip Hop </h1>
</div>

<div class="shell">
<div id="content" class="left">

@foreach ($posts as $post)

 @include ('posts.post_fetured')

@endforeach

 @include ('posts.post')

 @include ('posts.post_smallbox')




 <div class="cl">&nbsp;</div>
</div>

@endsection
