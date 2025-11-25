<?php 
include '../config/connection.php';

$qAbout = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
$item = $result->fetch_object();

// Calculate age
$tanggal_lahir = $item->bron;
$lahir = new DateTime($tanggal_lahir);
$sekarang = new DateTime();
$umur = $sekarang->diff($lahir)->y;


?>



<section id="about" class="about section py-5">

    <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">About</h2>
    </div>
        <p >
            Saya adalah seorang profesional kreatif yang berfokus pada desain dan pengembangan web, dengan dedikasi untuk menciptakan karya yang memadukan estetika, fungsi, dan nilai bagi setiap proyek yang saya kerjakan
        </p>
    </div><!-- End Section Title -->
<br>
<br>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 justify-content-center align-items-start">
            <!-- Profile Image -->
            <div class="col-lg-4 text-center">
                <div class="profile-image-container position-relative">
                    <img src="../storages/about/<?= $item->image?>" 
                         class="img-fluid  shadow-lg border border-4 border-white" 
                         alt="Profile Image"
                         style="width: 400px; height: 500px; object-fit: cover;">
              
                </div>
            </div>

            <!-- Profile Content -->
            <div class="col-lg-8">
                <div class="ps-lg-5">
                    <h2 class="fw-bold text-capitalize mb-3 "><?=$item->name?></h2>
                    <p class="fst-italic lead text-muted mb-4">
                        Saya pelajar yang giat belajar dan berkomitmen untuk mengembangkan diri melalui pendidikan dan pengalaman.
                    </p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-calendar-check text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Tanggal Lahir</strong>
                                        <span><?= date('d F Y', strtotime($item->bron)) ?></span>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-postcard text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Kode Pos</strong>
                                        <span><?=$item->zip_code?></span>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-telephone text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">No Telepon</strong>
                                        <span><?=$item->phone?></span>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-geo-alt text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Alamat</strong>
                                        <span class="text-capitalize"><?=$item->address?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-person-badge text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Umur</strong>
                                        <span><?= $umur ?> tahun</span>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-mortarboard text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Pendidikan Terakhir</strong>
                                        <span class="text-capitalize"><?=$item->work?></span>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-envelope text-primary me-2 mt-1"></i>
                                    <div>
                                        <strong class="d-block">Email</strong>
                                        <span><?=$item->email?></span>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .about {
        background-color: #f8f9fa;
    }
    
    .profile-image-container {
        position: relative;
        display: inline-block;
    }
    
    .section-title h2 {
        position: relative;
        display: inline-block;
    }
    
    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
    }
    
    .list-unstyled li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .list-unstyled li:last-child {
        border-bottom: none;
    }
    
    @media (max-width: 992px) {
        .profile-image-container {
            margin-bottom: 30px;
        }
        
        .ps-lg-5 {
            padding-left: 0 !important;
        }
    }
</style>