
<?php


$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


$con = mysqli_connect('localhost', 'root', '', 'social_media_db');

$sql = "INSERT INTO users (username, password, role) VALUES ('".$username."', '".$password."', '".$role."')";

mysqli_query($con, $sql);

header("location: index.php?page=user");




?>
