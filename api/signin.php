<?php



 include '../config/database.php'; 

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($email) && isset( $password) && strlen($email) > 5 && strlen($password) > 5){

    $query = "SELECT * FROM users WHERE email = '$email'";
    $user_query = mysqli_query($connection, $query);
    $user_about =  mysqli_query($user_query);

    if(mysqli_num_rows($user_query)>0){
    $user_about = mysqli_fetch_assoc($user_query);
    
   if($password != $user_about['password']){
    echo 'Парольді қате енгіздіңіз!';
   }

    session_start();
   $_SESSION['id']=$user_about['id'];
   $_SESSION['username']=$user_about['username'];
    header('Location: http://localhost/%d0%ba%d0%bc4%20%d0%bf%d1%80%d0%b0%d0%ba%d1%82%d0%b8%d0%ba%d0%b0/20%2005%2025/cart.php');
 
}else{
    echo 'Пайдаланушы табылмады';
}

}
else{
    echo 'Мәліметтерді толық енгізіңіз';
} 


?>