<?php

require "dbConnect.php";

$id = $_GET['id'];

$sql =  "DELETE FROM `prox_request` WHERE `prox_request`.`id` = $id";
$res = $conn->query($sql);
echo $res;