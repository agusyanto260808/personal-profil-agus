<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';

    $blogs = "SELECT * FROM blogs";
    $result = mysqli_query($connect, $blogs) or die(mysqli_error($connect));
?>

<!-- content -->
<div id="layoutSidenav_content">
    <div class="row p-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Blog</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Pengarang</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-uppercase">
                                <?php
                                    $no = 1;
                                    while($item = $result->fetch_object()):
                                ?>
                                <tr >
                                    <td><?= $no ?></td>
                                    <td>
                                        <img src="../../../storages/blog/<?= $item->image ?>"
                                             alt="Gambar" width="100" height="100" class="rounded">
                                    </td>
                                    <td><?= $item->date ?></td>
                                    <td><?= $item->author ?></td>
                                    <td><?= substr(strip_tags($item->tittle), 0, 10) . '...' ?> </td>
                                    <td>
                                       <?= substr(strip_tags($item->description), 0, 10) . '...' ?>
                                    </td>
                                  <td>
                                        <div class="d-flex flex-wrap gap-2 justify-content-center gap-2">
                                            <a href="./detail.php?id=<?= $item->id ?>" 
                                            class="btn btn-success btn-sm">Detail</a>
                                            <a href="./edit.php?id=<?= $item->id ?>" 
                                            class="btn btn-warning btn-sm">Edit</a>
                                            <a href="../../actions/blog/destroy.php?id=<?= $item->id ?>" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                        </div>
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
</div>


