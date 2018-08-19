<!DOCTYPE html>
<html lang="en">
    <?php include "../components/head.php"; ?>
    <?php require "../api/dbConnect.php";?>
    
<body>
    
    <div class="container">

        <form action="/prox/api/addMovie.php", method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="">
            </div>
            <div class="form-group  ">
                <label>Year</label>
                <input type="text" class="form-control" name="year" placeholder="">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="discription" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Image URL</label>
                <input type="text" class="form-control" name="image_url" placeholder="">
            </div>
            <div class="form-group">
                <label>Download Link</label>
                <input type="text" class="form-control" name="download_link" placeholder="">
            </div>
            <div class="form-group">
                <label>Trailer Link</label>
                <input type="text" class="form-control" name="trailer_link" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <?php 
                        $sql = "SELECT * FROM `prox_category`";
                        if($res = $conn->query($sql)) {
                            while($row = $res->fetch_assoc()) {
                                $id = $row['id'];
                                $name = $row['category_name'];
                                echo "<option value=\"$id\">$name</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Add Movie</button>
        </form>

    </div>

</body>
</html>