<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password , $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

//////////////////////////////////////
// mysqli_query
$query = "SELECT * FROM users";
$result = mysqli_query($conn , $query);
// $query = "CREATE DATABASE myDB";
if (mysqli_num_rows($result) > 0) {
//   echo "Database created successfully";
//   while($row = mysqli_fetch_assoc($result)){
//       print_r($row);
//   }
    // print_r($result);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
      
    while ($row= mysqli_fetch_assoc($result)){
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
} else {
  echo "Error creating database: " . $conn->error;
  
}
// 288

$conn->close();

?>