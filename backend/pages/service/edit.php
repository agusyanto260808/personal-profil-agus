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
                <h5>Edit Service</h5>
            </div>
            <div class="card-body">
            <?php include '../../actions/service/show.php'; ?>
            <form action="../../actions/service/update.php?id=<?= $service->id ?>" method="POST">
                <div class="mb-3">
                        <label for="jobInput" class="form-label">job</label>
                         <input type="text" name="job"  id="jobInput"  class="form-control" placeholder="Masukan job..."  required value="<?=$service->job?>">
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="../../action/service/update.php" alt="">
                        <label for="iconInput" class="form-label">pilih icon</label>
                        <input type="text" value="<?=$service->icon?>" name="icon" class="form-control" id="iconInput"  placeholder="Masukan icon..."></input>
                    </div>
                    
                    <div class="mb-3">
                            <label for="descriptionInput" class="form-label">description</label>
                             <textarea type="text" name="description"  id="descriptionInput"  class="form-control" placeholder="Masukan description..."  required value=""><?=$service->description?></textarea>
                        </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning" name="tombol">Edit</button>
                    <a href="./index.php" class="btn btn-secondary">Kembali</a>
                  </div>
            </div>
        </div>
    </div>
 </div>

 <?php
 include '../../partials/footer.php';
 include '../../partials/script.php';
 ?>





             