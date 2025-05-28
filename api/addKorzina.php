<?php
include '../config/database.php';
session_start();

$course_id = $_GET['id'];
$user_id = $_SESSION['id'];
if(isset($course_id) && isset($user_id)){
    $query = "INSERT INTO korzina (course_id, user_id) VALUES ('$course_id' , '$user_id')";
    $korzina_query = mysqli_query($connection, $query);

    if(!$korzina_query){
        echo 'Тауар себетке салынбады!';
    } else{
        header('Location: http://localhost/%D0%BA%D0%BC4%20%D0%BF%D1%80%D0%B0%D0%BA%D1%82%D0%B8%D0%BA%D0%B0/20%2005%2025/cart.php');
    }
}

?>
