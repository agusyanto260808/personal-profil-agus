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
                <h5>Edit socmed</h5>
            </div>
            <div class="card-body">
           <?php include '../../actions/socmeds/show.php';?>
                <form action="../../actions/socmeds/update.php?id=<?= $socmed->id?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="iconInput" class="form-label">icon</label>
                         <input type="text" name="icon"  id="iconInput"   class="form-control" placeholder="Masukan icon..."   required value="<?= $socmed->icon?>">
                    </div>
                    <div class="mb-3">
                        <label for="linkInput" class="form-label">link</label>
                         <input type="url" name="link"  id="linkInput"   class="form-control" placeholder="Masukan link..."   required value="<?= $socmed->link?>">
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





             