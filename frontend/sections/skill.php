<?php
// Front-end skill dari id 1–3
$qFrontend = "SELECT * FROM skills WHERE id BETWEEN 1 AND 3";
$resultFrontend = mysqli_query($connect, $qFrontend) or die(mysqli_error($connect));

// Back-end skill dari id 4–6
$qBackend = "SELECT * FROM skills WHERE id BETWEEN 4 AND 6";
$resultBackend = mysqli_query($connect, $qBackend) or die(mysqli_error($connect));
?>

<style>
/* Style untuk tooltip yang muncul saat hover */
.skill-tooltip {
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  transition: all 0.3s ease;
  font-size: 0.9rem;
  color: #666;
  padding: 0;
  margin-top: 5px;
  line-height: 1.5;
}

.progress:hover .skill-tooltip {
  max-height: 100px;
  opacity: 1;
  padding: 1px 0;
}

/* Style dasar progress bar */
.progress {
  margin-bottom: 20px;
  position: relative;
}

.progress-bar-wrap {
  height: 10px;
  background: #000000ff;
  border-radius: 5px;
  margin-top: 5px;
}

.progress-bar {
  height: 100%;
  border-radius: 5px;
  background: linear-gradient(90deg, #cd0000f0, #ad0202ff);
  transition: width 1s ease-in-out;
}

.skill {
  display: flex;
  justify-content: space-between;
  font-weight: 600;
}

.val {
  font-style: normal;
  color: #000000ff;
}
</style>

<section id="skill" class="skills section">
  <!-- Section Title -->
 <div class="container section-title" data-aos="fade-up">
    <div class="text-center mb-3">
      <h2 class="mb-0">Skill</h2>
      </div>
    <p>Menguasai berbagai kemampuan teknis dan kreatif yang terus diasah untuk menghasilkan karya terbaik dan inovatif.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row skills-content skills-animation">
      <!-- Kolom Kiri (Frontend) -->
      <div class="col-lg-6">
        <?php while ($item = $resultFrontend->fetch_object()): ?>
          <div class="progress">
            <span class="skill">
              <span><?= htmlspecialchars($item->skill) ?></span>
              <i class="val"><?= $item->percent ?>%</i>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" 
                   style="width: <?= $item->percent ?>%"
                   aria-valuenow="<?= $item->percent ?>" 
                   aria-valuemin="0" 
                   aria-valuemax="100"></div>
            </div>
            <div class="skill-tooltip"><?= htmlspecialchars($item->description) ?></div>
          </div>
        <?php endwhile; ?> 
      </div>

      <!-- Kolom Kanan (Backend) -->
      <div class="col-lg-6">
        <?php while ($item = $resultBackend->fetch_object()): ?>
          <div class="progress">
            <span class="skill">
              <span><?= htmlspecialchars($item->skill) ?></span>
              <i class="val"><?= $item->percent ?>%</i>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" 
                   style="width: <?= $item->percent ?>%"
                   aria-valuenow="<?= $item->percent ?>" 
                   aria-valuemin="0" 
                   aria-valuemax="100"></div>
            </div>
            <div class="skill-tooltip"><?= htmlspecialchars($item->description) ?></div>
          </div>
        <?php endwhile; ?> 
      </div>
    </div>
  </div>
</section>