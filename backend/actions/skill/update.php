<?php
include '../../app.php';
include './show.php';

if(isset($_POST['tombol'])){
    $skill = escapeString($_POST['skill']);
    $percent = escapeString($_POST['percent']);
    $description = escapeString($_POST['description']);
  
    }

    $qUpdate = "UPDATE skills SET skill='$skill', percent='$percent', description='$description' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
        <script>
             alert('Data Berhasil diubah');
             window.location.href = '../../pages/skill/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal diubah');
            window.location.href = '../../pages/skill/edit.php';
         </script>
         ";
    }

