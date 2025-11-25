<?php
include '../../app.php';
include './show.php';

if(isset($_POST['tombol'])){
    $name = escapeString($_POST['name']);
    $bron = escapeString($_POST['bron']);
    $address = escapeString($_POST['address']);
    $zip_code = escapeString($_POST['zip_code']);
    $email = escapeString($_POST['email']);
    $phone = escapeString($_POST['phone']);
    $total_project = escapeString($_POST['total_project']);
    $work = escapeString($_POST['work']);
    $description = escapeString($_POST['description']);

    $imageNew = $about->image;
    $storages = "../../../storages/about/";

    // cek apakah user menguplod gambar baru
    if (!empty($_FILES['image']['tmp_name'])){
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($about->image) && file_exists($storages . $about->image)) {

        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE abouts SET name='$name', bron='$bron', address='$address', zip_code='$zip_code', email='$email',
    phone='$phone', total_project='$total_project', work='$work', description='$description', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
        <script>
             alert('Data Berhasil diubah');
             window.location.href = '../../pages/about/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal diubah');
            window.location.href = '../../pages/about/edit.php';
         </script>
         ";
    }

}