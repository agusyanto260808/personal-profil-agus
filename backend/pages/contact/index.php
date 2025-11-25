<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';


    $Contact ="SELECT * FROM contacts";
    $result = mysqli_query($connect, $Contact) or die(mysqli_error($connect));
?>

<!-- content -->
  <div id="layoutSidenav_content">
<div class="row p-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Contact</h5>
               
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
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
                                <td><?= $item->name?></td>
                                <td><?= $item->email?></td>
                                <td><?= $item->phone?></td>
                                <td><?= $item->subject?></td>
                                <td><?= $item->massage?></td>
                                
                                    <td class="action-buttons">
                                <form method="POST" action="../../actions/contact/destroy.php" style="display:inline;">
                                  <input type="hidden" name="id" value="<?= $item->id ?>">
                                  <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?')">
                                    <i class="mdi mdi-delete"></i> Hapus
                                  </button>
                                </form>
                              </td>
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