     <?php 
   include '../config/connection.php';

    $services ="SELECT * FROM services";
    $result = mysqli_query($connect, $services) or die(mysqli_error($connect));
    // $item = $result->fetch_object();
?>

<section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Services</h2>
      </div>
        <p>Berbagai layanan yang saya tawarkan sebagai bentuk kemampuan dan keahlian di bidang tertentu, dengan hasil kerja yang rapi, kreatif, dan sesuai kebutuhan.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php while ($item = $result->fetch_object()):?>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="<?= $item->icon?>"></i></div>
              <h4><a href="" class="stretched-link"><?= $item->job?></a></h4>
              <p><?= $item->description?></p>
            </div>
          </div>
            <?php endwhile; ?> 

        
        </div>

      </div>

    </section>
   <style>
/* Style dasar card */
.service-item {
  background: #ffffff; /* putih default */
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  text-align: left;
}

/* Warna default icon & text */
.service-item .icon i {
  font-size: 40px;
  color: #e6007e; /* warna icon default */
  transition: color 0.3s;
}

/* Saat hover (ubah background & teks) */
.service-item:hover {

  color: #fff;           /* teks jadi putih */
}

/* Saat hover, icon ikut berubah warna */
.service-item:hover .icon i {
  color: #fff;
}

/* Saat hover, judul link ikut berubah */
.service-item:hover h4 a {
  color: #fff;
}

</style>