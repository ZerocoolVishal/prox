<!doctype html>
<html lang="en">

  <?php include "../head.php" ?>

  <body>

    <?php include "../header.php" ?>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Music</h1>
          <p class="lead text-muted">All music at one place</p>
          <p>
            <a href="#" class="btn btn-primary my-2">English</a>
            <a href="#" class="btn btn-secondary my-2">Hindi</a>
            <a href="#" class="btn btn-secondary my-2">Marathi</a>
            <a href="#" class="btn btn-secondary my-2">Others</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/12/Stargroves-album-cover.png?auto=format&q=60&fit=max&w=930" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>STARGROVERS</b></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Download Album</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Open</button>
                    </div>
                    <small class="text-muted">9 Tracks</small>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>

    </main>

    <?php 
      include "../footer.php";
      include "../load_scripts.php";
    ?>

  </body>
</html>
