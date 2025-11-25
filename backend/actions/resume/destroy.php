<?php
include '../../app.php';
include './show.php';

 $storages = "../../../storages/resume/";

//  hapus gambar lama jika ada
if(!empty($resume->image) && file_exists($storages . $resume->image)){
    unlink(($storages . $resume->image));
}
// hapus data
$qDelete = "DELETE FROM resumes WHERE id = '$resume->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil dihapus atau tidak
if($result){
   echo "
        <script>
             alert('Data Berhasil dihapus');
             window.location.href = '../../pages/resume/index.php';
         </script>
        ";
         }else{
        echo "
         <script>
            alert(' Data gagal dihapus');
            window.location.href = '../../pages/resume/index.php';
         </script>
         ";
         }
?>
