<?php


// DATA base Connection
$con=new mysqli('localhoat','root','','dasamahipati');
if(!$conn){
    die("error deleting record".mysqli_error($con));
}
?>
