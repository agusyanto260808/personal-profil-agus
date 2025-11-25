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
                <h5>Detail Data project</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/project/show.php';
                ?>
                <form action="">
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?= $project->title?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                         <input type="text" class="form-control" value="<?= $project->job?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="categoryInput" class="form-label">Categori</label>
                         <input type="text" class="form-control" value="<?= $project->category?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="text" id="description" class="form-control" disabled><?= $project->description?></textarea>
                    </div>
                    <div class="mb-3">
                       <h6>Gambar</h6>
                      <img class="w-25" src="../../../storages/project/<?= $project->image ?>" alt="">

                    </div>
                    
                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
 </div>
