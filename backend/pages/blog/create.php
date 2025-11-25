<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>
<!--content-->
  <div id="layoutSidenav_content">
<div class="row p-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Tambah Data Blog
                </h5>
            </div>
            <div class="card-body">
                <form action="../../actions/blog/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Pilih Gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="date" class="form-control" id="dateInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="authorInput" class="form-label">Penulis</label>
                        <input type="text" name="author" class="form-control" id="authorInput" placeholder="Masukan Penulis Buku..." required>
                    </div>

                    <div class="mb-3">
                        <label for="tittleInput" class="form-label">Judul</label>
                        <input type="text" name="tittle" class="form-control" id="tittleInput" placeholder="Masukan Judul Buku..." required>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" placeholder="Deskripsi...." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
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