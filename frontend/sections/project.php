<?php
    $qProject = "SELECT * FROM projects";
    $result = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>

<section id="project" class="portfolio section light-background">
    <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Project</h2>
    </div>
        <p>Menampilkan berbagai karya dan hasil kerja terbaik yang pernah saya buat, sebagai bukti kemampuan dan kreativitas saya di berbagai bidang.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <?php
                $qCategory = mysqli_query($connect, "SELECT DISTINCT category FROM projects");
                while($row = mysqli_fetch_object($qCategory)):
                    $categorySlug = strtolower(str_replace(' ', '-', $row->category)); // untuk class filter
                ?>
                <li data-filter=".filter-<?= $categorySlug ?>">
                    <?= ucfirst($row->category) ?>
                </li>
                <?php endwhile; ?>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php while ($project = $result->fetch_object()): 
                    $projectCategorySlug = strtolower(str_replace(' ', '-', $project->category)); // format yang sama dengan filter
                ?>
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= $projectCategorySlug ?>">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="../storages/project/<?= $project->image ?>" 
                             class="card-img-top" 
                             alt="<?= htmlspecialchars($project->title) ?>" 
                             style="object-fit: cover; height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?= htmlspecialchars($project->title) ?></h5>
                            <p class="card-text text-capitalize"><?= htmlspecialchars($project->job) ?></p>
                        </div>
                      <div class="card-footer bg-white border-0 d-flex justify-content-end">
    <button class="btn btn-sm btn-primary py-0 px-2" data-bs-toggle="modal" data-bs-target="#projectModal<?= $project->id ?>">
        <i class="bi bi-zoom-in"></i> Lihat
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="projectModal<?= $project->id ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-capitalize"><?= htmlspecialchars($project->title) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../storages/project/<?= $project->image ?>" class="img-fluid mb-3">
                <p class="bi bi-person-workspace"> <?= htmlspecialchars($project->job) ?></p>
                <p > <?= htmlspecialchars($project->description) ?></p>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section>
