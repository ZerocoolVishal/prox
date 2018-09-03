<?php

require "dbConnect.php";

$name = $_GET["name"];

$sql = "INSERT INTO `prox_category` (`id`, `category_name`) VALUES (NULL, '$name');";
$resp = $conn->query($sql);
echo $resp." Added";
header("location:../admin/");