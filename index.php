<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--import CSS-->
    <?php require 'load_css.html' ?>
    <title>Project X - The ultimate download website</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">prox</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample03" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="music/">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movies/">Movies</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    </header>

    <div class="container">
      <h1 class="title">The Download Centre</h1>
      <h4>ultimate download site for local</h4>
      <hr>
      <h3>Categories</h3>
      <ul>
        <li><a href="#">Movies</a></li>
        <li><a href="#">Songs</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Applications</a></li>
        <li><a href="#">Other</a></li>
      </ul>
      <hr>
      <h2>Popular Movies</h2>
      <h2>Popular Songs</h2>
      <h2>Popular Videos</h2>
      <h2>Popular Applications</h2>
    </div>

    <!--import JavaScript-->
    <?php include 'load_js.html' ?>
  </body>
</html>