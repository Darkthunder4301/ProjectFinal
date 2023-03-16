<?php
    include("../../connect.inc.php");

    $name = $_POST['Name'];
    $tel = $_POST['Tel'];
    $dish1 = $_POST['Dish1'];
    $dish2 = $_POST['Dish2'];
    $dish3 = $_POST['Dish3'];
    $dish4 = $_POST['Dish4'];
    $dish5 = $_POST['Dish5'];
    $dish6 = $_POST['Dish6'];
    $dish7 = $_POST['Dish7'];
    $dish8 = $_POST['Dish8'];
    $dish9 = $_POST['Dish9'];
    $numTables = $_POST['number_of_tables'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $address = $_POST['address'];
    $province = $_POST['province'];

    $sql = "insert into menu1400 (customer_name,tel,dish1,dish2,dish3,dish4,dish5,dish6,dish7,dish8,dish9,number_of_tables,date,time,address,province) value ('$name','$tel','$dish1','$dish2','$dish3','$dish4','$dish5','$dish6','$dish7','$dish8','$dish9','$numTables','$date','$time','$address','$province')";

    $qMenu = $conn->query($sql);
    if($qMenu){
        header('Location: ../../user.order.php');
    }else{
        echo "Error while inserting user data";
    }
?>