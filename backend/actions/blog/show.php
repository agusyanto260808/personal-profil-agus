<?php

if (!isset($_GET['id'])) {
    echo "
<script>
alert('Tidak bisa memilih Id ini');
window.location.href='../../pages/blog/index.php';
</script>
";
    exit;
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM blogs WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));


$blog = $result->fetch_object();
if (!$blog) {
    die("Data tidak di temukan");
}
