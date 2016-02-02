<?php
require_once('db/dbConnection.php');
$album_name = $_POST["album"];
$album_description = $_POST["description"];
$file_name=$_POST["filename"];
$title=$_POST["title"];
$query="INSERT INTO images (album,description,filename,title) values ('$album_name','$album_description','$file_name','$title')";
mysqli_query($conn, $query) or die('ERROR:'.mysqli_error($conn));
?>
