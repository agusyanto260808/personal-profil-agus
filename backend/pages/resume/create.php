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
        <h5>Tambah Resume</h5>
      </div>
      <div class="card-body">
        <form action="../../actions/resume/store.php" method="POST">
          <div class="mb-3">
            <label for="dateInput" class="form-label">Tanggal</label>
            <input type="text" name="date" id="dateInput" class="form-control" placeholder="Masukkan tanggal..." required>
          </div>
          <div class="mb-3">
            <label for="jobInput" class="form-label">Pekerjaan</label>
            <input type="text" name="job" id="jobInput" class="form-control" placeholder="Masukkan nama pekerjaan..." required>
          </div>
          <div class="mb-3">
            <label for="placeInput" class="form-label">Tempat</label>
            <input type="text" name="place" id="placeInput" class="form-control" placeholder="Masukkan tempat..." required>
          </div>
          <div class="mb-3">
            <label for="descriptionInput" class="form-label">Deskripsi</label>
            <textarea name="description" id="descriptionInput" class="form-control" rows="4" placeholder="Masukkan deskripsi..." required></textarea>
          </div>
          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary" name="tombol">Simpan</button>
            <a href="./index.php" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>