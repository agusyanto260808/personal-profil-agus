   <?php 
   include '../config/connection.php';

    $qAbout ="SELECT * FROM abouts";
    $result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
    $qcontact ="SELECT * FROM abouts";
    $result_contact = mysqli_query($connect, $qcontact) or die(mysqli_error($connect));
    $item = $result->fetch_object();
?>

<section id="contact" class="contact section">

      <!-- Section Title -->
       <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Contact</h2>
      </div>
        <p>Hubungi saya untuk informasi lebih lanjut, kerja sama, atau pertanyaan seputar proyek dan layanan.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Lokasi </h3>
                <p class="text-capitalize"><?=$item->address?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3> Telepon</h3>
                <p><?=$itemAbout->phone?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p><?= $itemAbout->email?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
        
          <form action="actions/contacts/create_contact.php" method="post"   >
              <div class="row gy-4">

                  <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda" required="">
                  </div>

                  <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda" required="">
                  </div>

                  <div class="col-12">
                      <input type="text" class="form-control" name="phone" placeholder="Masukan Nomor Telepon Anda" required="">
                  </div>

                  <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Masuka Judul Pesan " required="">
                  </div>

                  <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Masukan Pesan Anda " required=""></textarea>
                  </div>

                   <button type="submit" class="btn btn-primary me-2" name="tombol">
                <i></i> Kirim Pesan
            </button>

              </div>
          </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
<!-- <style>
    /* Style default icon */
.contact .info-item i {
  background: #00a0f7ff;   /* background default */
  color: #000000ff;        /* warna icon default */
  font-size: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  margin-right: 15px;
  transition: all 0.3s ease; /* biar animasi halus */
}

/* Saat di-hover (disentuh kursor) */
.contact .info-item:hover i {
  background: #001ba3ff;  /* background berubah */
  color: #fff;          /* warna icon jadi putih */
  transform: scale(1.1); /* icon agak membesar */
}

/* Saat diklik (active) */
.contact .info-item:active i {
  background: #473bc3ff;  /* lebih gelap saat klik */
  color: #fff;
}
</style> -->