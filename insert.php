<?php

$server = "localhost";
$username = "root";
$password = "";
$database= "insert";

$conn1 = mysqli_connect($server,$username,$password,$database);

if($conn1){
    echo "Connected Successfully <br/>";
}


    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) &&
    !empty($_POST['address'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $query = "insert into hassan (name , email , age , address)values('$name','$email','$age','$address')";

        $conn = "";
        $run = mysqli_query($conn1,$query);         

        if($run){
            echo "form submitted succesfully";

        }

             else {
                 echo "form not submitted";
                }


    }  

?>
