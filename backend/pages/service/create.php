<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<!-- content -->
   <div id="layoutSidenav_content">
 <div class="row p-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data service</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/service/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
            <label for="iconInput" class="form-label">Ikon (Bootstrap Icon)</label>
            <input type="text" name="icon" class="form-control" id="iconInput" placeholder="Contoh: bi-instagram" required>
            <div class="form-text">Lihat daftar ikon di <a href="https://icons.getbootstrap.com/" target="blank">Bootstrap Icons</a></div>
          </div>
                   <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                         <input type="text"  name="job" id="jobInput" class="form-control" placeholder="Masukan Pekerjaan..."  required>
                    </div>
                    
                    <button type="submit" class="btn btn-success me-3" name="tombol">Tambah</button>
                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
 </div>

 <?php
include '../../partials/footer.php';
include '../../partials/script.php';
 ?>
 