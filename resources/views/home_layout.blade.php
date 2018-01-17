
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Bomba Clot</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    @yield ('home.css')
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Bomba Clot</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/top100">Top 100</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">History</a>
          </li>

          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      @yield('content')

     <div id="sidebar" class="right">

       <div class="box box-tabs">
         <div class="tabs">
           <ul>
             <li><a href="#popular" class="active">Popular</a></li>
             <li><a href="#comments">Comments</a></li>
             <li class="last"><a href="#featured">Featured</a></li>
           </ul>
         </div>

         <div class="cl">&nbsp;</div>
         <div class="tabs-content">
           <ul class="tabs-list" id="popular">
             <li><a href="#">Libero non, blandit blandit, sed odio lectus</a></li>
             <li><a href="#">Senectus donec, lacus scelerisque, vestibulum id tristique.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
             <li><a href="#">Libero non, blandit sed odio lectus non.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
           </ul>
           <ul class="tabs-list" id="comments" style="display: none;">
             <li><a href="#">Senectus donec, lacus scelerisque, vestibulum id tristique.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
             <li><a href="#">Libero non, blandit sed odio lectus non.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
           </ul>
           <ul class="tabs-list" id="featured" style="display: none;">
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus</a></li>
             <li><a href="#">Senectus donec, lacus scelerisque, vestibulum id tristique.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
             <li><a href="#">Tortor magna dolor, aliquam tellis iaculis.</a></li>
             <li><a href="#">Libero non, blandit sed odio lectus non.</a></li>
             <li><a href="#">Libero non, blandit blandit, sed odio lectus.</a></li>
           </ul>
         </div>
       </div>

       <div class="box">
         <h2 class="title">Follow Us!</h2>
         <div class="footer-social-icons">
           <ul class="social-icons">
         <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
         <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
         <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
         <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
         <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
         <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
     </ul>
         </div>
       </div>

       </div>
     </div>
     <div class="cl">&nbsp;</div>
   </div>



    </main><!-- /.container -->


  </body>
</html>
