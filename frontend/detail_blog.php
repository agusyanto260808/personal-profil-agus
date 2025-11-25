<?php
include '../config/connection.php';



$id = (int)$_GET['id'];

// Query with security improvement
$qSelect = "SELECT * FROM blogs WHERE id = $id";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$blog = $result->fetch_object();
if (!$blog) {
    die("
    <div class='alert alert-danger'>
        Data tidak ditemukan
    </div>
    ");
}
   $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'list_blog.php';

?>
<?php
include './partials/header.php';
include '../config/connection.php';
?>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .blog-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
        }
        .blog-image {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            border: 5px solid white;
        }
        .blog-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
        }
        .blog-content p {
            margin-bottom: 1.5rem;
        }
        .related-card {
            transition: transform 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .author-badge {
            background-color: #e9ecef;
            color: #495057;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
    </style>

<body>
    <!-- Blog Header -->
    <div class="blog-header text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3 text-uppercase"><?= ($blog->tittle) ?></h1>
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="badge bg-light text-dark me-3">
                            <i class="far fa-calendar-alt me-1"></i>
                            <?= date('d F Y', strtotime($blog->date)) ?>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Main Blog Content -->
                <article class="mb-5">
                    <!-- Featured Image -->
                    <img src="../storages/blog/<?= ($blog->image) ?>" 
                         class="img-fluid blog-image w-100" 
                         alt="<?= ($blog->tittle) ?>"
                         style="height: 500px; object-fit: cover;">
                    
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <?= $blog->description ?>
                    </div>
                    
                    <!-- Tags and Social Sharing -->
                  <!-- Ganti div yang ada dengan ini -->
<div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
    <div>
        <span class="author-badge">
            <i class="fas fa-user-circle me-1"></i>
            <?= ($blog->author ?? 'Admin') ?>
        </span>
    </div>
    <a href="<?= htmlspecialchars($redirect) ?>" class="btn btn-outline-primary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>
                </article>
                
                <!-- Related Articles -->
                <h3 class="fw-bold mb-4 pb-2 border-bottom">
                    <i class="fas fa-book-open me-2"></i>Artikel Terkait
                </h3>
                <div class="row">
                    <?php
                    $relatedQuery = "SELECT id, tittle, image, date FROM blogs WHERE id != $id ORDER BY date DESC LIMIT 3";
                    $relatedResult = mysqli_query($connect, $relatedQuery);
                    
                    while($related = $relatedResult->fetch_object()):
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 related-card">
                            <img src="../storages/blog/<?= ($related->image) ?>" 
                                 class="card-img-top" 
                                 style="height: 180px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize"><?= ($related->tittle) ?></h5>
                                <small class="text-muted">
                                    <?= date('d M Y', strtotime($related->date)) ?>
                                </small>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="?id=<?= $related->id ?>" class="btn btn-sm btn-outline-primary stretched-link">
                                    Baca Artikel <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                         <div class="mt-5">
              
            </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
 <?php include './partials/footer.php' ?>
  
</body>
