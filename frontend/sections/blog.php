<?php 
include '../config/connection.php';

$blog = "SELECT * FROM blogs  WHERE id BETWEEN 1 AND 3";
$result = mysqli_query($connect, $blog) or die(mysqli_error($connect));
?>

<section id="blog" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Blog</h2>
    </div>
    <p>
      Blog ini berisi berbagai artikel, tips, dan inspirasi seputar desain, pengembangan web, 
      serta dunia kreatif lainnya, yang ditulis untuk berbagi pengetahuan dan pengalaman.
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <?php while ($blog = $result->fetch_object()): ?>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
          <div class="card shadow-sm border-15 h-100">
            
            <!-- Gambar Blog -->
            <img src="../storages/blog/<?= $blog->image ?>" 
                 class="card-img-top img-fluid" 
                 alt="<?= htmlspecialchars($blog->tittle) ?>" 
                 style="height: 220px; object-fit: cover; border-radius: .5rem .5rem 0 0;">
            
            <div class="card-body d-flex flex-column">
              <div class="mb-3">
                <h5 class="card-title text-uppercase"><?= $blog->tittle ?></h5>
                 <p class="text-muted small mb-2">
                                <i class="bi bi-calendar me-1"></i>
                                <?= date('d M Y', strtotime($blog->date)) ?>
                                <span class="mx-2">•</span>
                                <i class="bi bi-person-circle me-1"></i><?= htmlspecialchars($blog->author) ?>
                                
                            </p>
              </div>
              <a href="./detail_blog.php?id=<?= $blog->id ?>" class="btn btn-success mt-auto">Detail</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>

    <!-- Tombol lihat selengkapnya di bawah card -->
    <div class="text-center mt-4">
      <a href="./list_blog.php" class="btn btn-success px-4">Lihat Selengkapnya</a>
    </div>

  </div>
</section>
