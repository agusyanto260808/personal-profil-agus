<?php
include '../../app.php';
include './show.php';

 $storages = "../../../storages/socmed/";

//  hapus gambar lama jika ada
if(!empty($socmed->image) && file_exists($storages . $socmed->image)){
    unlink(($storages . $socmed->image));
}
// hapus data
$qDelete = "DELETE FROM socmeds WHERE id = '$socmed->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil dihapus atau tidak
if($result){
   echo "
        <script>
             alert('Data Berhasil dihapus');
             window.location.href = '../../pages/socmed/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal dihapus');
            window.location.href = '../../pages/socmed/index.php';
         </script>
         ";
         }
?>
