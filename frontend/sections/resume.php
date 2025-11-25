<?php 
$qAbout ="SELECT * FROM abouts";
$result_about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));

$socmed ="SELECT * FROM socmeds";
$result_socmed = mysqli_query($connect, $socmed) or die(mysqli_error($connect));

$qResume ="SELECT * FROM resumes";
$result_resume = mysqli_query($connect, $qResume) or die(mysqli_error($connect));

$itemAbout = $result_about->fetch_object();
$socmed = $result_socmed->fetch_object();

// Hitung Total Project
$qTotalProject = mysqli_query($connect, "SELECT COUNT(*) as total FROM projects");
$totalProject = mysqli_fetch_assoc($qTotalProject)['total'] ?? 0;

// Hitung Total Skill
$qTotalSkill = mysqli_query($connect, "SELECT COUNT(*) as total FROM skills");
$totalSkill = mysqli_fetch_assoc($qTotalSkill)['total'] ?? 0;

$qTotalblog = mysqli_query($connect, "SELECT COUNT(*) as total FROM blogs");
$totalblog = mysqli_fetch_assoc($qTotalblog)['total'] ?? 0;
?>

<section id="resume" class="resume section light-background py-5">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Resume</h2>
      </div>
    <p >
      Ringkasan perjalanan pendidikan yang mencerminkan keahlian, dedikasi, dan pencapaian profesional.
    </p>
  </div>

  <div class="container">
    <div class="row align-items-center">

      <!-- Kolom Foto & Profil -->
       <div class="row gy-4 justify-content-center align-items-start">
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="text">
          <img src="../storages/about/<?= $itemAbout->image ?>" class="img-fluid rounded shadow mb-3" alt="" style="max-width:70%;">
          <p class="lead text-muted">
             <h3 class="resume-title text-capitalize mb-3">Ringkasan hidup saya</h3>
           Saya seorang pelajar SMK Negeri 3 Banjar yang sedang PKL di PT LAUWBA TECHO INDONESIA dan saya pernah kunjungan industri di PT Live Media
          </p>
        </div>
      </div>

      <!-- Kolom Data Riwayat -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" style="margin-bottom:250px">
        <h3 class="resume-title mb-4">Data Riwayat</h3>
        <?php while ($itemResume = $result_resume->fetch_object()): ?>
          <div class="resume-item p-3 border rounded shadow-sm mb-4 bg-white">
            <h4 class="fw-bold mb-1"><?= $itemResume->job ?></h4>
            <div class="text-muted mb-2">
              <i class="bi bi-calendar me-2"></i><?= $itemResume->date ?>
            </div>
            <div class="d-flex align-items-center mb-1">
              <i class="bi bi-building me-2"></i>
              <span class="text-uppercase"><?= $itemResume->place ?></span>
            </div>
          </div>
        <?php endwhile; ?>
        
        

        <!-- Tombol Download CV -->
        <div class="cta-section mt-3">
          <a href="https://drive.google.com/file/d/1-hqH9ghpsUNXGMfUrAyt6IlCxgsBqqgt/view?usp=sharing" class="btn btn-primary">
            <i class="bi bi-download me-1"></i> Download CV
          </a>
        </div>
             <!-- Statistik -->
<div class="container mt-5">
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="p-4 shadow-sm bg-white rounded-3">
        <h3 class="fw-bold"><?= $totalProject ?></h3>
        <p class="mb-0">Total Project</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-4 shadow-sm bg-white rounded-3">
        <h3 class="fw-bold"><?= $totalSkill ?></h3>
        <p class="mb-0">Total Skill</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="p-4 shadow-sm bg-white rounded-3">
        <h3 class="fw-bold"><?= $totalblog ?></h3>
        <p class="mb-0">Total Blog</p>
      </div>
    </div>
  </div>
</div>
      </div>

    </div>
  </div>

</section>
