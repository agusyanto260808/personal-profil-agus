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
                <h5>Edit Data About</h5>
            </div>
            <div class="card-body">
                 <?php
                include '../../actions/about/show.php';
                ?>
                <form action="../../actions/about/update.php?id=<?= $about->id?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" id="nameInput" class="form-control" placeholder="Masukan Nama..." required value="<?=$about->name?>">
                    </div>
                    <div class="mb-3">
                        <label for="bronInput" class="form-label">Tanggal Lahir</label>
                         <input type="date" name="bron"  id="bronInput"  class="form-control" required value="<?=$about->bron?>">
                    </div>
                    <div class="mb-3">
                        <label for="zip_codeInput" class="form-label">Kode Pos</label>
                         <input type="number" name="zip_code"  id="zip_codeInput"   class="form-control" placeholder="Masukan Kode Pos..."   required value="<?=$about->zip_code?>">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                         <input type="email"  name="email" id="emailInput" class="form-control" placeholder="Masukan Email..."  required value="<?=$about->email?>">
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">No.telepon</label>
                         <input type="number"  name="phone"  id="phoneInput" class="form-control" placeholder="Masukan No telepon..." required  value="<?=$about->phone?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="total_projectInput" class="form-label">Total_project</label>
                         <input type="text"  name="total_project"   id="total_projectInput" class="form-control"   placeholder="Masukan Pekerjaan..." required value="<?=$about->total_project?>">
                    </div>
                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan Sekarang</label>
                         <input type="text"  name="work"  id="workInput"  class="form-control"  placeholder="Masukan Pekerjaan..." required value="<?=$about->work?>" >
                    </div>
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea type="text" name="address" id="addressInput" class="form-control" placeholder="Masukan Alamat..." row="5" ><?=$about->address?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea type="text" name="description" id="descriptionInput" class="form-control" placeholder="Masukan Alamat..." row="5" ><?=$about->description?></textarea>
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="../../../storages/about/<?= $about->image?>" alt="">
                       <input class="form-control" type="file" name="image" id="imageInput" >
                    </div>
                    <button type="submit" class="btn btn-warning" name="tombol">Edit</button>
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
 