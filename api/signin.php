<?php 
include '../config/database.php'; 

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($email) && isset( $password) && strlen($email) > 5 && strlen($password) > 5){
    
    $query = "SELECT * FROM users WHERE email = '$email'";
    $user_query = mysqli_query($connection, $query);

   
    if (mysqli_fetch_assoc($user_query ) <= 0) {
        echo ''
    }
}

?>
