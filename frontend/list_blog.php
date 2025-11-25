<?php
include '../config/connection.php';

// Initialize search query
$search = isset($_GET['search']) ? mysqli_real_escape_string($connect, $_GET['search']) : '';

// Build the query with search condition
$query = "SELECT * FROM blogs";
if (!empty($search)) {
    $query .= " WHERE tittle LIKE '%$search%' ";
}
$query .= " ORDER BY date DESC";

$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

if (!$result || mysqli_num_rows($result) == 0) {
    $no_results = true;
} else {
    $no_results = false;
}

include './partials/header.php';
?>

<div class="container py-5">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="index.php#blog" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <!-- Section Title and Search -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5">
        <div class="section-title text-center text-md-start mb-3 mb-md-0">
            <h2 class="fw-bold">Blog Terbaru</h2>
            <p class="text-muted">Temukan artikel menarik dan inspiratif yang telah kami tulis.</p>
        </div>
        
        <!-- Search Form -->
        <div class="search-container">
            <form method="GET" action="list_blog.php" class="d-flex">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari blog..." 
                           value="<?= htmlspecialchars($search) ?>">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- pencarian -->
    <?php if (!empty($search)): ?>
        <div class="alert alert-info mb-4">
            Menampilkan hasil pencarian untuk: <strong>"<?= htmlspecialchars($search) ?>"</strong>
            <?php if ($no_results): ?>
                - <span class="text-danger">Tidak ada hasil yang ditemukan</span>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Blog List -->
    <?php if (!$no_results): ?>
        <div class="row g-4">
            <?php while ($blog = $result->fetch_object()): ?>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <img src="../storages/blog/<?= htmlspecialchars($blog->image) ?>" 
                             class="card-img-top rounded-top" 
                             alt="<?= htmlspecialchars($blog->tittle) ?>"
                             style="height: 200px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"><?= htmlspecialchars($blog->tittle) ?></h5>
                            <p class="text-muted small mb-2">
                                <i class="bi bi-calendar me-1"></i>
                                <?= date('d M Y', strtotime($blog->date)) ?>
                                <span class="mx-2">•</span>
                                <i class="bi bi-person-circle me-1"></i><?= htmlspecialchars($blog->author) ?>
                                
                            </p>
                            <p class="card-text text-muted flex-grow-1">
                                <?= substr(strip_tags($blog->description), 0, 150) ?>...
                            </p>
                            <div class="mt-auto">
                                <a href="./detail_blog.php?id=<?= $blog->id ?>&redirect=list_blog.php" 
                                   class="btn btn-success w-100">
                                    <i class="bi bi-eye me-1"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <div class="text-center py-5">
            <i class="bi bi-journal-text display-4 text-muted mb-3"></i>
            <h4 class="text-muted">Tidak ada blog yang ditemukan</h4>
            <p class="text-muted">Silakan coba dengan kata kunci lain atau lihat semua blog kami.</p>
            <a href="list_blog.php" class="btn btn-primary mt-3">
                <i class="bi bi-journal-bookmark"></i> Lihat Semua Blog
            </a>
        </div>
    <?php endif; ?>
</div>

<style>
    .search-container {
        width: 100%;
        max-width: 350px;
    }
    
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-img-top {
        transition: opacity 0.3s ease;
    }
    
    .card:hover .card-img-top {
        opacity: 0.9;
    }
    
    @media (max-width: 768px) {
        .search-container {
            max-width: 100%;
        }
    }
</style>

<?php include './partials/footer.php'; ?>