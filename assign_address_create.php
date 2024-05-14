<?php


$user = $_POST['user'];
$location = $_POST['location'];

$con = mysqli_connect('localhost', 'root', '', 'social_media_db');

// sql statement
$sql = "INSERT INTO users_locations (user_id, location_id) VALUES ('".$user."', '".$location."')";

mysqli_query($con, $sql);

header("location: index.php?page=assign-address");

