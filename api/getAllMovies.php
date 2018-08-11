<?php

/*header("content-type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "prox";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);*/

require "dbConnect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM prox_movies";
$result = $conn->query($query);

$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);


