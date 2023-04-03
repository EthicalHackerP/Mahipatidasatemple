<?php
//  include 'dbconnection.php';
$sname="localhost";
$uname="root";
$pass="";
$db="dasamahipati";

$conn=mysqli_connect($sname,$uname,$pass,$db);
if(!$conn){
    die("error deleting record".mysqli_error($con));
}


//   <!-- details share to db -->

if(isset($_POST['submit'])){
    $name=$_POST['NAME'];
    $number=$_POST['PHONE_NUMBER'];
    $email=$_POST['EMAIL'];

   {
        $sql="INSERT INTO `contactus` (`id`, `Devote Name`, `Phone Number`, `E-mail ID`) VALUES (NULL, '$name', '$number', '$email');";
        if(mysqli_query($conn,$sql)){
        echo "<script> alert(`New record inserted \n Thank You`)</script>";
        }
        else{
            echo "error".mysqli_error($conn);

        }
        mysqli_close($conn);
    }
}
 

?>