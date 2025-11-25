<?php
include '../../app.php';

if (isset($_POST['tombol'])){
    $icon = escapeString($_POST['icon']);
    $link = escapeString($_POST['link']);

    $qInsert = "INSERT INTO socmeds (link, icon) VALUES('$link', '$icon')";
    $result = mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = '../../pages/socmed/index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambah'); window.location.href = '../../pages/socmed/create.php';</script>";
    }
}
?>