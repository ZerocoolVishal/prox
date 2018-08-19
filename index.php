<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--import CSS-->
    <?php include 'load_css.html' ?>
    <style>
       .section{
         padding-bottom:100px;
      }
    </style>
    <title>prox - The ultimate download website</title>
  </head>

  <body>

    <?php include "header.php" ?>

    <div class="container">

      <h1 class="title">prox</h1>
      <h4  class="text-muted">free movies and series 👻</h4>
      <hr>

      <?php include "request_movie.php" ?>

      <div class="section">
        <h2>Bolliwood</h2>
        <?php include "gallery.php"?>
        <button type="button" class="btn btn-default float-right">Show All</button>
      </div>

      <div class="section">
      <h2>Holliwood</h2>
      <?php include "gallery.php"?>
      <button type="button" class="btn btn-default float-right">Show All</button>
      </div>

      <div class="section">
      <h2>Netflix</h2>
      <?php include "gallery.php"?>
      <button type="button" class="btn btn-default float-right">Show All</button>
      </div>

      <div class="section">
      <h2>Other Popular</h2>
      <?php include "gallery.php"?>
      <button type="button" class="btn btn-default float-right">Show All</button>
      </div>

    </div>

    <!--import JavaScript-->
    <?php include 'load_js.html' ?>
  </body>
</html>