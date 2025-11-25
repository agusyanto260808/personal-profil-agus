<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';


    $resume ="SELECT * FROM resumes";
    $result = mysqli_query($connect, $resume) or die(mysqli_error($connect));
?>

<!-- content -->
  <div id="layoutSidenav_content">
<div class="row p-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Resume</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
              <table class="table table-bordered table-striped align-middle">
                      <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Periode</th>
                                <th>Pekerjaan</th>
                                <th>Tempat</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-uppercase">
                            <?php
                                $no =1;
                                while($item =$result->fetch_object()):
                            ?>
                            <tr>
                                <td><?= $no?></td>
                                <td><?= $item->date?></td>
                                <td><?= $item->job?></td>
                                <td><?= $item->place?></td>
                                <td><?= $item->description?></td>
                                <td>
                                  <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning">Edit</a>
                                    
                                    <a href="../../actions/resume/destroy.php?id=<?= $item->id?>" class="btn btn-danger" onclick="retrun confirm('Apakah anda yakin?')">Hapus</a>
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