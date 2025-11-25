<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';


    $Project ="SELECT * FROM projects";
    $result = mysqli_query($connect, $Project) or die(mysqli_error($connect));
?>

<!-- content -->
   <div id="layoutSidenav_content">
<div class="row p-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Project</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Pekerjaan</th>
                                <th>Categori</th>
     
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody  class="text-uppercase">
                            <?php
                                $no =1;
                                while($item =$result->fetch_object()):
                            ?>
                            <tr class="text-capitalize">
                                <td><?= $no?></td>
                                <td>
                                    <img src="../../../storages/project/<?= $item->image?>"
                                    alt="Gambar" width="100" height="100">
                                </td>

                                <td><?= $item->	title?></td>
                                <td><?= $item->job?></td>
                                <td><?= $item->	category?></td>

                                <td>
                                   <a href="./detail.php?id=<?= $item->id?>" class="btn btn-success">Detail</a>
                                    <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning">Edit</a>
                                    <a href="../../actions/project/destroy.php?id=<?= $item->id?>" class="btn btn-danger" onclick="retrun confirm('Apakah anda yakin?')">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
   ?>