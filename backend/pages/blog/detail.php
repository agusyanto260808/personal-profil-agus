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
                <h5>Ubah data Blog</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/blog/show.php';
                ?>
                <form action="../../actions/blog/update.php?id=<?= $blog->id ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="dateInput" required
                            value="<?= $blog->date ?>"  disabled>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Pembuat</label>
                        <input  name="author" class="form-control" id="author"
                            placeholder="Masukan Nama Pembuat..." required value="<?= $blog->author ?>"  disabled>
                    </div>

                    <div class="mb-3">
                        <label for="tittleInput" class="form-label">Judul</label>
                        <input  name="tittle" class="form-control" id="tittleInput"
                            placeholder="Masukan judul..." required value="<?= $blog->tittle ?>"  disabled>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea  name="description" class="form-control" id="descriptionInput"
                            placeholder="Masukan deskripsi..." required value="" disabled><?= $blog->description ?></textarea>
                    </div>

                   <div class="mb-3">
                        <img class="w-25" src="../../../storages/blog/<?= $blog->image?>" alt="">
                       
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