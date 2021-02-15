<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jumbotron Template · Bootstrap</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

     </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <div class="container">
        <div class="navbar-header">
           <a class="navbar-brand" href="#">LARAVEL_CHIRIAC</a>
        </div>
        <div class="links">
          <a href="https://laravel.com/docs">Docs</a>
          <a href="https://laracasts.com">Laracasts</a>
          <a href="https://laravel-news.com">News</a>
          <a href="https://blog.laravel.com">Blog</a>
          <a href="https://nova.laravel.com">Nova</a>
          <a href="https://forge.laravel.com">Forge</a>
          <a href="https://vapor.laravel.com">Vapor</a>
          <a href="https://github.com/laravel/laravel">GitHub</a>
         </div>
       </div>
    </nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
 
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$h1}}</h1>
         <p>{{$h2}}</p>
         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    
    
    @yield('content')

    <div style="height: 50px;"></div>


</main>
    <footer class="container" align="center">
       <p>&copy; 2021 Company, Inc.</p>
    </footer>
</body>
</html>
