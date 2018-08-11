<?php

header("content-type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "prox";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);