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
                <h5>Ubah Data project</h5>
            </div>
            <div class="card-body">
                 <?php
                include '../../actions/project/show.php';
                ?>
                <form action="../../actions/project/update.php?id=<?= $project->id?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" name="title" id="titleInput" class="form-control" placeholder="Masukan Judul..." required value="<?=$project->title?>">
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                         <input type="taxt" name="job"  id="jobInput"  class="form-control" required value="<?=$project->job?>">
                    </div>
                    <div class="mb-3">
                        <label for="categoryInput" class="form-label" >Kategori</label>
                        <select class="form-select" id="categoryInput" aria-label="Default select example" name="category" required>
                            <option disabled <?= empty($project->category) ? 'selected' : '' ?>>Pilih kategori</option>
                            <option value="progemming"<?= ($project->category == 'progemming') ? 'selected' : '' ?>>Progemming</option>
                            <option value="multimedia"<?= ($project->category == 'multimedia') ? 'selected' : '' ?>>Multimedia</option>
                            <option value="prestasi"<?= ($project->category == 'prestasi') ? 'selected' : '' ?>>Prestasi</option>
                        </select>
                    </div>
                     <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                    <textarea name="description" id="descriptionInput" class="form-control" rows="5" placeholder="Masukkan deskripsi..." required><?=$project->description?></textarea>
                  </div>
                    <div class="mb-3">
                        <img class="w-25" src="../../../storages/project/<?= $project->image?>" alt="">
                       <input class="form-control" type="file" name="image" id="imageInput" >
                    </div>
                    <button type="submit" class="btn btn-warning" name="tombol">Simpan</button>
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


