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
                <h5>Ubah Data Resume</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/resume/show.php';
                if (!isset($resume) || !$resume) {
                    echo "<script>alert('Data tidak ditemukan');window.location.href='../../pages/resume/index.php';</script>";
                    exit;
                }
                ?>
                <form action="../../actions/resume/update.php?id=<?= isset($resume->id) ? $resume->id : '' ?>" method="POST">
                  <div class="mb-3">
                    <label for="dateInput" class="form-label">Tanggal</label>
                    <input type="text" name="date" id="dateInput" class="form-control" placeholder="Masukkan tanggal..." required value="<?= isset($resume->date) ? $resume->date : '' ?>">
                  </div>
                  <div class="mb-3">
                    <label for="jobInput" class="form-label">Pekerjaan</label>
                    <input type="text" name="job" id="jobInput" class="form-control" placeholder="Masukkan nama pekerjaan..." required value="<?= isset($resume->job) ? $resume->job : '' ?>">
                  </div>
                  <div class="mb-3">
                    <label for="placeInput" class="form-label">Tempat</label>
                    <input type="text" name="place" id="placeInput" class="form-control" placeholder="Masukkan tempat..." required value="<?= isset($resume->place) ? $resume->place : '' ?>">
                  </div>
                  <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                    <textarea name="description" id="descriptionInput" class="form-control" rows="4" placeholder="Masukkan deskripsi..." required><?= isset($resume->description) ? $resume->description : '' ?></textarea>
                  </div>
                  <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning" name="tombol">Edit</button>
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