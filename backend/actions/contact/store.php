<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $subject = escapeString($_POST['subject']);
    $massage = escapeString($_POST['massage']);

    $qInsert = "INSERT INTO contacts(name, email, subject, massage) VALUES('$name', '$email', '$subject', '$massage')";
    $result = mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = '../../pages/contact/index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambah'); window.location.href = '../../pages/contact/create.php';</script>";
    }
}
?>