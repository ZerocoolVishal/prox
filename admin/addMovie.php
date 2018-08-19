<!DOCTYPE html>
<html lang="en">
    <?php include "../components/head.php"?>
<body>
    <form action="/prox/api/addMovie.php", method="POST">
        title : <br>
        <input type="text" name="title"> <br>
        year : <br>
        <input type="text" name="year"><br>
        discription : <br>
        <textarea name="discription"></textarea><br>
        image_url : <br>
        <input type="text" name="image_url"><br>
        download_link : <br>
        <input type="text" name="download_link"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>