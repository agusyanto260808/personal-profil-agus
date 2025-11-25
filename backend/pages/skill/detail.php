<?php
include'../../partials/header.php';
include'../../partials/sidebar.php';
include'../../partials/navbar.php';
?>

<!-- content -->
  <div id="layoutSidenav_content">
 <div class="row p-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Detail Data Skill</h5>
            </div>
            <div class="card-body">
                 <?php include '../../actions/skill/show.php';?>
                <form action="../../actions/skill/update.php?id=<?= $skill->id?>" method="POST" enctype="multipart/form-data">
                   
                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                         <input type="text" name="skill"  id="skillInput"  class="form-control" placeholder="Masukan Skill..."  required value="<?=$skill->skill?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="percentInput" class="form-label">persen</label>
                         <input type="number" name="percent"  id="percentInput"   class="form-control" placeholder="Masukan persen..."   required value="<?= $skill->percent?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                         <textarea type="text" name="description"  id="descriptionInput"   class="form-control" placeholder="Masukan persen..."   required value="" disabled><?= $skill->description?></textarea>
                    </div>
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
 