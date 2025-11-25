<?php
include '../../app.php';
include './show.php';

 $storages = "../../../storages/service/";

//  hapus gambar lama jika ada
if(!empty($service->image) && file_exists($storages . $service->image)){
    unlink(($storages . $service->image));
}
// hapus data
$qDelete = "DELETE FROM services WHERE id = '$service->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil dihapus atau tidak
if($result){
   echo "
        <script>
             alert('Data Berhasil dihapus');
             window.location.href = '../../pages/service/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal dihapus');
            window.location.href = '../../pages/service/index.php';
         </script>
         ";
         }
?>
