<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
   
    $skill = escapeString($_POST['skill']);
    $percent = escapeString($_POST['percent']);
    $description = escapeString($_POST['description']);
  
    $storages = "../../../storages/skill/";
   

    
        $qInsert = "INSERT INTO skills(skill, percent, description) 
         VALUES( '$skill', '$percent', '$description')";


        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
        <script>
        alert('Data berhasil ditambah');
        window.location.href = '../../pages/skill/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambah');
        window.location.href = '../../pages/skill/create.php';
        </script>
        ";
    }
