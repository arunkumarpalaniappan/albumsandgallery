<?php
require_once('db/dbConnection.php');
$album_name = $_POST["album"];
$album_category = $_POST["category"];
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="images/";
$new_size = $file_size/1024;
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);
if(move_uploaded_file($file_loc,$folder.$final_file))
{
  $query="INSERT INTO images(album,category,file,type,size) VALUES('$album_name','$album_category','$final_file','$file_type','$new_size')";
   $result = mysqli_query($conn, $query) or die('ERROR:'.mysqli_error($conn));
   if($result==TRUE)
    return "success";
   else
    return "failure";
}
