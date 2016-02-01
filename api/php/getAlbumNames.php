<?php
require_once('db/dbConnection.php');
$query     = "SELECT name FROM albums";
$result = mysqli_query($conn, $query) or die('ERROR:'.mysqli_error($conn));
   while ($data = mysqli_fetch_row($result)) {
         $names[]=$data[0];
   }
echo json_encode($names,JSON_FORCE_OBJECT);
?>
