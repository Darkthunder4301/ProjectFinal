<?php
    include("connect.inc.php");
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];

    # $password = md5($password);

    $sql = "insert into users (firstname, lastname, email, tel, password) values ('$firstname', '$lastname', '$email', '$tel', '$password');";

    $qUser = $conn->query($sql);
    if($qUser){
        header('Location: login.php');
    }else{
        echo "Error while inserting user data";
    }
?>