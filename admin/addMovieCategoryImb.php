
<?php require "../api/dbConnect.php";?>
<h1>Add Category</h1>
<hr>
<form action="../api/addMovieCategory.php", method="GET">
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="name" placeholder="Category" required>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add Movie</button>
</form>