<?php
$server = "localhost";
$username = "root";
$password = "";
$database= "test";

$conn =  mysqli_connect($server,$username,$password,$database);


if($conn){
    echo "Connected Successfully <br/>";

}

        $fn = $_POST['firstname']; 
        $ln = $_POST['lastname'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];

      $query = "INSERT INTO `form`(`firstName`, `lastName`, `email`, `password`, `dob`) VALUES ('$fn','$ln','$email','$password','$dob')";

      $run = mysqli_query($conn,$query); 

      if($run){
        echo "";

      }else {
        echo "form not submitted";
      }
