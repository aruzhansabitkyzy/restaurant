<?php
session_start();
  require '../model/database.php';
  global $connection;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $food_id = print $_SESSION['id'];


    global $connection;
    //code here
    $insert = mysqli_query($connection, "INSERT INTO orders(name , surname, address, phone_number, food_id, quantity) values('".$name."', '".$surname."', '".$address."', '".$phone_number."', '".$food_id."', '".$quantity."')");
    if($insert) {
        include '../view/add-client.php';
    }
    else {
        "Error "  . mysqli_error($connection);
    }
