<?php
session_start();
include '../../app.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = escapeString($_POST['email']);
    $password = $_POST['password']; // tidak di-escape dulu

    $qLogin = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connect, $qLogin) or die(mysqli_error($connect));

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin_logged_in'] = true;
        header('location: ../../pages/dashboard/index.php');
        exit();
    }else {
        echo "<script>
            alert('Email atau password salah');
            window.location.href='../../pages/user/login.php'
        </script>";
    }
}
?>
