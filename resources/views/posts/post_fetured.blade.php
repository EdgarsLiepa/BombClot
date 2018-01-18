<div class="box box-featured">

  <div class="box-image"> <a><img src=" {{ $post->picture }} "  alt="" /></a> <span class="mark-featured notext">&nbsp;</span> </div>

  <div class="box-body">
    <p class="posted">{{ $post->updated_at->toFormattedDateString() }}</p>
    <h2 href="/posts/{{ $post->id }}">{{ $post->title }}</h2>
    <p class="text">{{ $post->preview }} </p>
    <a href="/posts/{{ $post->id }}" class="continue">Continue reading</a> </div>

  <div class="cl">&nbsp;</div>

</div>
