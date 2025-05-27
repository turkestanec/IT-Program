<?php
include '../config/database.php'; 

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($email) && isset( $password) && strlen($email) > 5 && strlen($password) > 5){

    $query = "SELECT * FROM users WHERE email = '$email'";
    $user_query = mysqli_query($connection, $query);
    $user_about =  mysqli_query($user_query);

   
    if ($user_about <= 0) {
        echo 'Мұндай пайдаланушы табылмады!';
    }

   if($password != $user_about['password']){
    echo 'Парольді қате енгіздіңіз!';
   }

   header('Location: http://localhost/%d0%ba%d0%bc4%20%d0%bf%d1%80%d0%b0%d0%ba%d1%82%d0%b8%d0%ba%d0%b0/20%2005%2025/');
   session_start();
   $_SESSION['id']=$user_about['id'];
   $_SESSION['username']=$user_about['username'];
}else{
    echo 'Мәліметтерді толық енгізіңіз';
}

?>
