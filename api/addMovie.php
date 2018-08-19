<?php

require "dbConnect.php";

$title = $_POST['title'];
$year = $_POST['year'];
$discription = $_POST['discription'];
$image_url = $_POST['image_url'];
$download_link = $_POST['download_link'];
$trailer_link = $_POST['trailer_link'];
$category = $_POST['category'];

$sql = "INSERT INTO `prox_movies` (`id`, `title`, `year`, `discription`, `image_url`, `download_link`, `upload_timestamp`, `trailer_link`) VALUES (NULL, '$title', '$year', '$discription', '$image_url', '$download_link', CURRENT_TIMESTAMP, '$trailer_link');";
$sql2 = "INSERT INTO `prox_movies` (`id`, `title`, `year`, `discription`, `image_url`, `download_link`, `upload_timestamp`) VALUES (NULL, '$title', '$year', '$discription', '$image_url', '$download_link', CURRENT_TIMESTAMP);";
$sql3 = "INSERT INTO `prox_movies` (`id`, `title`, `year`, `discription`, `image_url`, `download_link`, `upload_timestamp`, `trailer_link`, `category`) VALUES (NULL, '$title', '$year', '$discription', '$image_url', '$download_link', CURRENT_TIMESTAMP, '$trailer_link', '$category');";

$res = $conn->query($sql3);

echo $res . " Row updated";
