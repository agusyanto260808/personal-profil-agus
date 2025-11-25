<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    echo "<script>
    alert('Anda belum login');
    window.location.href='../user/login.php';
    </script>";
    exit();
}

$activePage = 'dashboard';
?>

<?php
include '../../../config/connection.php';

if (!isset($_SESSION['admin_logged_in'])) {
  echo "<script>
            alert('Anda harus login terlebih dahulu');
            window.location.href='../user/login.php';
        </script>";
  exit();
}

$qProfil = "SELECT * FROM abouts ORDER BY id DESC LIMIT 1";
$resProfil = mysqli_query($connect, $qProfil);
$dataProfil = ($resProfil && $resProfil->num_rows > 0) ? mysqli_fetch_object($resProfil) : null;
$nama = is_object($dataProfil) ? $dataProfil->name : 'Admin';
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../../partials/header.php'; ?>

<body>
  <div class="container-scroller">
    <?php include '../../partials/navbar.php'; ?>

    <div class="container-fluid page-body-wrapper">
      <?php include '../../partials/sidebar.php'; ?>
      <div class="" id="layoutSidenav_content">
        <div class="main-panel">
          <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px;">
            <div class="row p-5">
              <div class="col-12">
                <div class="card border-0 shadow-sm hover-shadow">
                  <div class="card-header bg-white d-flex align-items-center justify-content-between border-0">
                
                    <span class="text-muted"><i class="mdi mdi-calendar mr-1"></i><?= date('d F Y') ?></span>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <!-- Welcome Card -->
                      <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-primary text-white border-0 shadow">
                          <div class="card-body text-center py-4">
                            <h1 class="fw-bold mb-3"><i class="mdi mdi-hand-wave mr-2"></i>SELAMAT DATANG</h1>
                            <p class="mb-0 text-uppercase h4">Agus Styanto</p>
                          </div>
                        </div>
                      </div>

                      <!-- Stats Cards -->
                      <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100 hover-shadow">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h6 class="text-muted mb-2">Total Skill</h6>
                                <?php
                                $qCountskill = "SELECT COUNT(*) as total FROM skills";
                                $resCountskill = mysqli_query($connect, $qCountskill);
                                $totalskill = mysqli_fetch_object($resCountskill)->total;
                                ?>
                                <h3 class="mb-0 text-primary"><?= $totalskill ?></h3>
                                <small class="text-muted">Terakhir diperbarui</small>
                              </div>
                              <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                                <i class="mdi mdi-certificate text-primary" style="font-size: 2rem;"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100 hover-shadow">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h6 class="text-muted mb-2">Total Blog</h6>
                                <?php
                                $qCountBlog = "SELECT COUNT(*) as total FROM blogs";
                                $resCountBlog = mysqli_query($connect, $qCountBlog);
                                $totalBlog = mysqli_fetch_object($resCountBlog)->total;
                                ?>
                                <h3 class="mb-0 text-success"><?= $totalBlog ?></h3>
                                <small class="text-muted">Terakhir diperbarui</small>
                              </div>
                              <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                                <i class="mdi mdi-book-open text-success" style="font-size: 2rem;"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100 hover-shadow">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h6 class="text-muted mb-2">Total Project</h6>
                                <?php
                                $qCountProject = "SELECT COUNT(*) as total FROM projects";
                                $resCountProject = mysqli_query($connect, $qCountProject);
                                $totalProject = mysqli_fetch_object($resCountProject)->total;
                                ?>
                                <h3 class="mb-0 text-warning"><?= $totalProject ?></h3>
                                <small class="text-muted">Terakhir diperbarui</small>
                              </div>
                              <div class="bg-warning bg-opacity-10 p-3 rounded-circle">
                                <i class="mdi mdi-briefcase text-warning" style="font-size: 2rem;"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Recent Contacts -->
                      <div class="col-md-12 mb-4">
                        <div class="card border-0 shadow-sm">
                          <div class="card-header bg-white d-flex justify-content-between align-items-center border-0">
                            <h5 class="mb-0"><i class="mdi mdi-email-outline mr-2 text-primary"></i>Kontak Terbaru</h5>
                            <a href="../contact/index.php" class="btn btn-sm btn-primary">
                              <i class="mdi mdi-arrow-right mr-1"></i>Lihat Semua
                            </a>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead class="bg-light">
                                  <tr>
                                    <th class="border-0">No</th>
                                    <th class="border-0">Nama</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Subjek</th>
                                    <th class="border-0">Pesan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $qContact = "SELECT * FROM contacts ORDER BY id DESC LIMIT 5";
                                  $resContact = mysqli_query($connect, $qContact);

                                  if ($resContact && $resContact->num_rows > 0) {
                                    $no = 1;
                                    while ($contact = $resContact->fetch_object()) {
                                      $name = isset($contact->name) ? htmlspecialchars($contact->name) : '-';
                                      $email = isset($contact->email) ? htmlspecialchars($contact->email) : '-';
                                      $subject = isset($contact->subject) ? htmlspecialchars($contact->subject) : '-';
                                      $massage = isset($contact->massage) ? htmlspecialchars($contact->massage) : '-';
                                      $shortMassage = strlen($massage) > 50 ? substr($massage, 0, 50) . '...' : $massage;

                                      echo "<tr>
                                        <td>$no</td>
                                        <td>$name</td>
                                        <td>$email</td>
                                        <td>$subject</td>
                                        <td>$shortMassage</td>
                                      </tr>";
                                      $no++;
                                    }
                                  } else {
                                    echo "<tr><td colspan='5' class='text-center py-4'>
                                      <i class='mdi mdi-information-outline mr-2'></i>Tidak ada data kontak
                                    </td></tr>";
                                  }
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
              </div>
            </div>
          </div>

          <?php include '../../partials/footer.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include '../../partials/script.php'; ?>
  
  <style>
    .hover-shadow:hover {
      transform: translateY(-2px);
      transition: all 0.3s ease;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .bg-gradient-primary {
      background: linear-gradient(135deg, #000000ff 0%, #764ba2 100%) !important;
    }
    
    .card-header {
      padding: 1.25rem 1.5rem;
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(0,0,0,0.02);
    }
    
    .bg-light {
      background-color: #f8f9fa !important;
    }
  </style>
</body>
</html>