    <?php
        $qAbout = "SELECT * FROM abouts";
        $result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
        $item = $result->fetch_object();
    ?>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ">
            <!-- Sidebar Toggle (optional) -->
 <a class="navbar-brand ps-3 d-flex align-items-center gap-2" href="index.php">
    <span class="fw-bold fs-4">Y.A.</span>
</a>      <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button> -->

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>

            <!-- Navbar User Dropdown -->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../../storages/about/<?= $item->image ?>" alt="Profile"
                            width="35" height="35" class="rounded-circle" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- Profile Info -->
                        <li class="dropdown-header text-center">
                            <img src="../../../storages/about/<?= $item->image ?>" alt="Profile"
                                width="80" height="80" class="rounded-circle mb-2" />
                            <div><strong class="text-uppercase"><?= $item->name ?></strong></div>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <!-- Logout -->
                        <li>
                            <a href="../../actions/auth/logout.php" class="dropdown-item text-danger text-center">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
