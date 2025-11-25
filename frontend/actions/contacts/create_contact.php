
<?php
include '../../../config/connection.php';
include '../../../config/escapeString.php';

if(isset($_POST['tombol'])){
    $name = escapeString($_POST['name']);
     $email = escapeString($_POST['email']);
     $phone = escapeString($_POST['phone']);
    $subject = escapeString($_POST['subject']);
    $message = escapeString($_POST['message']);

     $qInsert = "INSERT INTO contacts (name, email, phone, subject, massage) VALUES
        ('$name', '$email', '$phone', '$subject', '$message')";

   
  
    mysqli_query($connect,$qInsert) or die(mysqli_error($connect));
    echo "
        <script>
        alert('Data Berhasil Ditambah');
        window.location.href = '../../index.php#contact';
         </script>
        ";
    }else{
    echo "
        <script>
        alert('Data gagal ditambah : " . mysqli_error($connect) . "');
        window.location.href = '../../index.php#contact'; 
        </script>
        ";
}


?>
