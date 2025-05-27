<?php 
include '../config/database.php'; // дерекқорға қосылу

// Форма арқылы жіберілген email және пароль
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($email, $password) && strlen($email) > 5 && strlen($password) > 5) {
    // SQL инъекциядан қорғану
    $email = mysqli_real_escape_string($connection, $email);

    // Пайдаланушыны дерекқордан іздеу
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Құпиясөзді тексеру
        if (password_verify($password, $user['password'])) {
            // Сәтті кіру — мысалы, сессия бастау
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header('Location: dashboard.php'); // немесе қалаған бетіңе бағыттау
            exit();
        } else {
            echo 'Құпиясөз қате!';
        }
    } else {
        echo 'Мұндай email тіркелмеген!';
    }
} else {
    echo 'Барлық өрістерді толтырыңыз!';
}
?>
