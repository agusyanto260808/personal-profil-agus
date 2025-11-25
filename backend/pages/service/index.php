<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';


    $service ="SELECT * FROM services";
    $result = mysqli_query($connect, $service) or die(mysqli_error($connect));
?>

<!-- content -->
  <div id="layoutSidenav_content">
<div class="row p-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Service</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                  <table class="table table-bordered table-striped align-middle">
                      <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Ikon</th>
                                <th>Pekerjaan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no =1;
                                while($item =$result->fetch_object()):
                            ?>
                            <tr>
                                <td><?= $no?></td>
                               

                                <td style="font-size: 40px" class="text-center"><i class="<?= $item->icon?>"></i></td>
                                <td><?= $item->job?></td>
                                 <td>
                                       <?= substr(strip_tags($item->description), 0, 10) . '...' ?>
                                    </td>
                                <td>
                                   <a href="./detail.php?id=<?= $item->id?>" class="btn btn-success">Detail</a>
                                   <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning">Edit</a>
                                      <a href="../../actions/service/destroy.php?id=<?= $item->id?>" class="btn btn-danger" onclick="retrun confirm('Apakah anda yakin?')">Hapus</a>
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