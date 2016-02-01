<?php
$album_name = $_POST["album"];
$album_category = $_POST["category"];
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
echo $album_name;
?>
