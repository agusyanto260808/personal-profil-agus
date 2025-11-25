<?php
include '../../app.php';

if (isset($_POST['tombol'])){
    $icon = escapeString($_POST['icon']);
    $job = escapeString($_POST['job']);
    $description = escapeString($_POST['description']);

    $qInsert = "INSERT INTO services(icon,job,  description) VALUES('$icon','$job' , '$description')";
    $result = mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = '../../pages/service/index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambah'); window.location.href = '../../pages/service/create.php';</script>";
    }
}
?>