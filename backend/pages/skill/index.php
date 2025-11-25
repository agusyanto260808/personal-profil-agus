<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';


$skill = "SELECT * FROM skills";
$result = mysqli_query($connect, $skill) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="body-wrapper">
    <div class="container-fluid">
        <div class="row p-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Tabel Skill</h5>
                        <a href="./create.php" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="tabel-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Skill</th>
                                        <th>Persen</th>
                                        <th>Deskripsi</th>
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
                                            <td><?= $item->skill ?></td>
                                            <td><?= $item->percent ?></td>
                                            <td><?= substr(strip_tags($item->description), 0, 10) . '...' ?></td>
                                            <td>
                                                <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success">Detail</a>
                                                <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                                <a href="../../actions/skill/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="retrun confirm('Apakah anda yakin?')">Hapus</a>
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
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>