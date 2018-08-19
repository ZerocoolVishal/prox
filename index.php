<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--import CSS-->
    <?php include 'components/load/load_css.html' ?>
    <style>
       .section{
         padding-bottom:100px;
      }
    </style>
    <title>prox - The ultimate download website</title>
  </head>

  <body>

    <?php include "components/header.php" ?>

    <div class="py-5 bg-light">

    <div style="text-align: center;">
      <h1 class="title">prox</h1>
      <h4  class="text-muted">free movies and series 👻</h4>
      <hr>
    </div>

      <div class="container">
        
        <div style="padding: 30px;">
          <?php include "components/request_movie.php" ?>
        </div>

        <div class="section">
          <h2>Bollywood</h2>
          <?php include "components/gallery.php"?>
          <button type="button" class="btn btn-default float-right">Show All</button>
        </div>

        <div class="section">
          <h2>Holliwood</h2>
          <?php include "components/gallery.php"?>
          <button type="button" class="btn btn-default float-right">Show All</button>
        </div>

        <div class="section">
          <h2>Netflix</h2>
          <?php include "components/gallery.php"?>
          <button type="button" class="btn btn-default float-right">Show All</button>
        </div>

        <div class="section">
          <h2>Other Popular</h2>
          <?php include "components/gallery.php"?>
          <button type="button" class="btn btn-default float-right">Show All</button>
        </div>

      </div>
    </div>
    
    <?php include "components/footer.php" ?>

    <!--import JavaScript-->
    <?php include 'components/load/load_js.html' ?>
  </body>
</html>