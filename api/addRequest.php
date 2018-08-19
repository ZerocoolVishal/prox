<?php

require "dbConnect.php";

/*$email = "example@example.com";
$message = "I want to see this movie";*/

$email = $_GET["email"];
$message = $_GET["message"];

$resp = $conn->query("INSERT INTO `prox_request` (`id`, `email`, `message`, `timestamp`) VALUES (NULL, '$email', '$message', CURRENT_TIMESTAMP);");
echo $resp." Added";