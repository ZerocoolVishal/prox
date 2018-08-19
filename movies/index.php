<!doctype html>
<html lang="en">
  
  <?php include "../components/head.php" ?>

  <body>

    <?php include "../components/header.php" ?>

    <main role="main">

      <!--<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Movies</h1>
          <p class="lead text-muted">All movies at one place</p>
          <p>
            <a href="#" class="btn btn-primary my-2">English</a>
            <a href="#" class="btn btn-secondary my-2">Hindi</a>
            <a href="#" class="btn btn-secondary my-2">Marathi</a>
            <a href="#" class="btn btn-secondary my-2">Others</a>
          </p>
        </div>
      </section>-->
      

      <div class="album py-5 bg-light">

        <div class="container">

           <?php include "../components/download_torrent.php" ?>

          <!--<div class="jumbotron mt-3">
            <h1>Download BitTorrent</h1>
            <p class="lead">
              To download the movies you will require BitTorrent,
              If you dont know how to download using BitTorrent <a href="#" target="_blank">see tutorial</a>
            </p>
            <a class="btn btn-lg btn-primary" href="https://www.bittorrent.com/bittorrent-free" target="_blank" role="button">Download &raquo;</a>
          </div>-->

          <div class="row" id="movies_list">
          </div>

           <?php include "../components/request_movie.php" ?>

        </div>
      </div>

    </main>

    <?php 
      include "../components/footer.php";
      include "../load_scripts.php";
    ?>

  </body>
</html>
