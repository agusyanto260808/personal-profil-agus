<?php
include './partials/header.php';
include '../config/connection.php';
?>
<body class="index-page">

  <?php include './partials/navbar.php' ?>

  <main class="main">

    <!-- Home Section -->
    <?php include './sections/home.php' ?>

    <!-- About Section -->
    <?php include './sections/about.php' ?>

    <!-- Blog Section -->
    <?php include './sections/blog.php' ?>
    
    <!-- Resume Section -->
     <?php include './sections/resume.php' ?>


    <!-- Skills Section -->
    <?php include './sections/skill.php' ?>

    <!-- Project Section -->
      <?php include './sections/project.php' ?>

     <!-- Services Section -->
    <?php include './sections/service.php' ?>
    
    <!-- Contact Section -->
    <?php include './sections/contact.php' ?>
  </main>

  <?php include './partials/footer.php' ?>

 <?php include './partials/script.php' ?>
</body>

</html>