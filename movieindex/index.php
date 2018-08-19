<!DOCTYPE html>
<html lang="en">
    <?php include "../components/head.php"?>
<body>
    <?php include "../components/header.php"?>

    <div class="container">
        <h1>Movie Index 🧐</h1>
        <p>
            All movies we have, if you dont find movie in the index please make a request 👉<a href="#request_movie">here</a> for that movie and we will make that available.
        </p>
        <?php include "movie_list.php"?>

        <div id="request_movie" style="padding-top:30px; padding-bottom:30px;">
            <?php include "../components/request_movie.php"?>
        </div>
    </div>

    <?php 
        include "../components/footer.php";
        include "../load_scripts.php";
    ?>
    <!--Movies Index JS-->
    <script src="movieindex.js"></script>
</body>
</html>