@extends ('layout')

@section ('css')

<link href="/css/article.css" rel="stylesheet">

@endsection

@section ('content')

  <h1 class="mt-4"> create a Post </h1>
  <hr>
  <form method="POST" action="/posts">

    {{ csrf_field() }}

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>

    <textarea id="body" name="body" class="form-control"></textarea>


  </div>


  <button type="submit" class="btn btn-primary">Publish</button>
</form>

@endsection
