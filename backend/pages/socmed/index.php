<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qsosmed = "SELECT * FROM socmeds";
$result = mysqli_query($connect, $qsosmed) or die(mysqli_error($connect));

?>

<!-- content -->
 <div id="layoutSidenav_content">
<div class="row p-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-item-center justify-content-between">
                <h5>Table Socmed</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                   <table class="table table-bordered table-striped align-middle">
                      <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Ikon</th>
                                <th>link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-uppercase">
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):

                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td style="font-size: 40px" class="text-center"><i class="<?= $item->icon?>"></i></td>
                                    <td>
                                        <a href="<?= htmlspecialchars($item->link) ?>" target="blank" class="text-truncate d-inline-block" style="max-width: 200px;">
                                            <?= htmlspecialchars($item->link) ?>
                                            
                                        </a>
                                        
                                    </td>
                                    <td>
                                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                    <a href="../../actions/socmeds/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</a>
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