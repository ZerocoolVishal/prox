<?php

header("content-type: application/json; charset=UTF-8");

require "dbConnect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM prox_movies";
$sql = "SELECT prox_movies.*, prox_category.category_name FROM prox_movies, prox_category WHERE prox_movies.category=prox_category.id";

$result = $conn->query($sql);

$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);

//var_dump($outp);


