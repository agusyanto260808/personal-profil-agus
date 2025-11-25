<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    // Fungsi validasi angka
    function onlyNumber($value) {
        return is_numeric($value) ? intval($value) : 0;
    }

    // Ambil dan escape input
    $name          = escapeString($_POST['name']);
    $bron          = escapeString($_POST['bron']);
    $address       = escapeString($_POST['address']);
    $zip_code      = escapeString($_POST['zip_code']);
    $email         = escapeString($_POST['email']);
    $phone         = escapeString($_POST['phone']);
    $total_project = onlyNumber($_POST['total_project']); // Validasi angka
    $work          = escapeString($_POST['work']);
    $description   = escapeString($_POST['description']);

    // File upload
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $storages = "../../../storages/about/";

    // Validasi upload   
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>alert('Gagal upload gambar: " . $_FILES['image']['error'] . "'); history.back();</script>";
        exit;
    }

    // Pindahkan file
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {

        // Query INSERT (pakai kutip di semua string, angka tetap tanpa kutip)
        $qInsert = "
            INSERT INTO abouts
            (name, bron, address, zip_code, email, phone, total_project, work, description, image)
            VALUES
            ('$name', '$bron', '$address', '$zip_code', '$email', '$phone', $total_project, '$work', '$description', '$imageNew')
        ";

        if (mysqli_query($connect, $qInsert)) {
            echo "
            <script>
                alert('Data Berhasil Ditambah');
                window.location.href = '../../pages/about/index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Gagal simpan ke database: " . mysqli_error($connect) . "');
                history.back();
            </script>
            ";
        }

    } else {
        echo "
        <script>
            alert('Gagal upload gambar. Data TIDAK ditambah ke database!');
            window.location.href = '../../pages/about/create.php';
        </script>
        ";
    }
}
?>
