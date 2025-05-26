<?php
$localhost = 'localhost';
$login = 'root';
$password = '';
$databaseName ='ITProgect' ;

$connection = mysqli_connect($localhost, $login, $password, $databaseName);

if(!$connection){
    echo 'Байланыспады';
}

?>