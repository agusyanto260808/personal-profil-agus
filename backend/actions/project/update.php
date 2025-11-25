<?php
include '../../app.php';
include './show.php';

if(isset($_POST['tombol'])){
    $title = escapeString($_POST['title']);
    $job = escapeString($_POST['job']);
    $description = escapeString($_POST['description']);
    $category = escapeString($_POST['category']);
   

    $imageNew = $project->image;
    $storages = "../../../storages/project/";

    // cek apakah user menguplod gambar baru
    if (!empty($_FILES['image']['tmp_name'])){
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($project->image) && file_exists($storages . $project->image)) {
            unlink(($storages . $project->image));
        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE projects SET title='$title', job='$job', description='$description', category='$category',image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
        <script>
             alert('Data Berhasil diubah');
             window.location.href = '../../pages/project/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal diubah');
            window.location.href = '../../pages/project/edit.php';
         </script>
         ";
    }

}