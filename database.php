<?php

$insert = false;
 // Connecting to database
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "tourism";
 
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 if(!$conn){
    die("Sorry we fialed to connect: ". mysqli_connect_error());
 }    

?>