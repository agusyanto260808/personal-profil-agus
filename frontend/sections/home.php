<?php 
include '../config/connection.php';

$qAbout = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
$item = $result->fetch_object();
?>

<section id="home" class="hero-section">
  <div class="container">
    <div class="hero-content" data-aos="fade-up" data-aos-delay="100">
      <h1 class="hero-title text-uppercase" style="user-select:none; -webkit-user-select:none;">
        <?= htmlspecialchars($item->name) ?>
      </h1>
      <p class="hero-description" style="user-select:none; -webkit-user-select:none;">
        <?= nl2br(htmlspecialchars($item->description)) ?>
      </p>
      
      <div class="social-links">
        <a href="https://x.com/home" target="blank" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/people/Agus-Yanto/pfbid089QXU5ABqGgHBTBZQ2hdrqeZNYEzb3sCqyy6qdW3DUmxaKJvUNo6B8VGepXAK1SAl/?sk=about" target="blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/styntoo/" target="blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/agusyanto260808" target="blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
      </div>
      
      <a href="#resume" class="btn-scroll" title="Scroll Down" style="user-select:none; -webkit-user-select:none;">
        Lihat Selengkapnya
      </a>
    </div>
  </div>
</section>

<style>
.hero-section {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: url('../storages/about/<?= $item->image?>') no-repeat center center;
  background-size: cover;
  color: white;
  padding: 0 2rem;
  overflow: hidden;
}

/* overlay tipis agar teks tetap jelas */
.hero-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.3); /* bisa diubah: 0.2 lebih terang, 0.4 lebih gelap */
  z-index: 1;
}

.hero-content {
  max-width: 800px;
  position: relative;
  z-index: 2;
}

.hero-title {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  line-height: 1.2;
  background: linear-gradient(90deg, #fff, #aaa);
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero-description {
  font-size: 1.2rem;
  line-height: 1.8;
  margin-bottom: 2.5rem;
  opacity: 0.9;
}

.social-links {
  display: flex;
  gap: 15px;
  margin: 2rem 0 3rem;
}

.social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(5px);
  color: white;
  font-size: 1.5rem;
  transition: all 0.3s ease;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.social-links a:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn-scroll {
  display: inline-flex;
  align-items: center;
  color: white;
  text-decoration: none;
  font-size: 1.1rem;
  padding: 0.8rem 1.5rem;
  border-radius: 50px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(5px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: all 0.3s ease;
}

.btn-scroll:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
}

.btn-scroll i {
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.btn-scroll:hover i {
  transform: translateY(3px);
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-description {
    font-size: 1rem;
  }
}
</style>
