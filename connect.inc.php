<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectfinal_php";

    $conn = new mysqli($host,$username,$password,$dbname);

    if(!$conn){
        die("Connection failed ". $conn->connect_error);
    }
?>