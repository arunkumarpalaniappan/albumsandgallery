<?php
require_once('db/dbConnection.php');
$name=$_GET['name'];
if (isset($name)){
$query="INSERT INTO `albums` (`name`) VALUES ('$name')";
mysqli_query($conn, $query) or die('ERROR:'.mysqli_error($conn));
echo "SUCCESS";
}else {
  echo "ERROR";
}
?>
