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
                <h5>Tambah Data Project</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/project/store.php" method="POST" enctype="multipart/form-data">
                     <div class="mb-3">
                       <label for="imageInput" class="form-label">Pilih Gambar</label>
                       <input class="form-control" type="file" name="image" id="imageInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" name="title" id="titleInput" class="form-control" placeholder="Masukan Judul..." required>
                    </div>
                
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                         <input type="text"  name="job" id="jobInput" class="form-control" placeholder="Masukan Pekerjaan..."  required>
                    </div>
                      <div class="mb-3">
                        <label class="form-label">Kategori</label>
                         <select class="form-select" aria-label="Default select example" name="category" required>
                            <option selected>Pilih kategori</option>
                            <option value="progemming">Progemming</option>
                            <option value="multimedia">Multimedia</option>
                            <option value="prestasi">Prestasi</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                         <textarea type="text"  name="description" id="descriptionInput" class="form-control" placeholder="Masukan Deskripsi..."  required></textarea>
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
 