<?php
$current_page   = basename($_SERVER['PHP_SELF']);
$current_folder = basename(dirname($_SERVER['PHP_SELF']));
?>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between mb-2">
                <a href="../dashboard/index.php" class="text-nowrap logo-img d-flex align-items-center">
                    <img src="../../template-admin/src/assets/images/logos/logo smk.png"
                        width="50" alt="Logo SMK" class="p-1" />
                    <span class="ms-2 fw-bold text-dark">Personal Profile Agus Yanto</span>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>

            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'dashboard' ? 'active' : '' ?>"
                            href="../dashboard/index.php">
                            <span><i class="ti ti-layout-dashboard"></i></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'about' ? 'active' : '' ?>"
                            href="../about/index.php">
                            <span><i class="ti ti-info-circle"></i></span>
                            <span class="hide-menu">Tentang Kami</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'services' ? 'active' : '' ?>"
                            href="../services/index.php">
                            <span><i class="ti ti-briefcase"></i></span>
                            <span class="hide-menu">Layanan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'blog' ? 'active' : '' ?>"
                            href="../blog/index.php">
                            <span><i class="ti ti-notes"></i></span>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'contact' ? 'active' : '' ?>"
                            href="../contact/index.php">
                            <span><i class="ti ti-phone-call"></i></span>
                            <span class="hide-menu">Kontak</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'skill' ? 'active' : '' ?>"
                            href="../skill/index.php">
                            <span><i class="ti ti-star"></i></span>
                            <span class="hide-menu">Keahlian</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'resume' ? 'active' : '' ?>"
                            href="../resume/index.php">
                            <span><i class="ti ti-file-text"></i></span>
                            <span class="hide-menu">Riwayat Hidup</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'project' ? 'active' : '' ?>"
                            href="../project/index.php">
                            <span><i class="ti ti-folder"></i></span>
                            <span class="hide-menu">Projek</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link <?= $current_folder === 'socmed' ? 'active' : '' ?>"
                            href="../socmed/index.php">
                            <span><i class="ti ti-world"></i></span>
                            <span class="hide-menu">Media Sosial</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->