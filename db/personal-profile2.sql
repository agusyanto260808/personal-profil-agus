-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2025 at 11:22 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal-profile2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `bron` date NOT NULL,
  `address` text NOT NULL,
  `zip_code` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `bron`, `address`, `zip_code`, `email`, `phone`, `total_project`, `work`, `image`, `description`) VALUES
(2, 'agus styanto budi nugrohoo', '2008-08-26', 'Ngorean, ngandong, gantiwarno, klaten, jawa tengah\r\n\r\n', 240209, 'agusyanto2719@gmail.com', '085803304706', 4, 'pelajar', '1755140427.png', 'Saya seorang pelajar smk\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `tittle`, `description`) VALUES
(1, '1755569140.png', '2026-02-24', 'Agus Styanto', ' Juara lomba gobak sodor di SMK', 'Berhasil meraih juara pada lomba gobak sodor tingkat SMK berkat kerja sama tim, strategi permainan, dan semangat pantang menyerah. Prestasi ini menjadi bukti kekompakan dan sportivitas yang tinggi dalam kegiatan ekstrakurikuler sekolah.'),
(2, '1755093485.png', '2025-08-30', 'smk n 3 banjar', 'Kunjungan Industri Jurusan TKRO ke Balai Yasa PT. KAI dan PT. FUTAKE INDONESIA 2023', 'Pada tahun 2023, Jurusan Teknik Kendaraan Ringan Otomotif (TKRO) melaksanakan kunjungan industri ke Balai Yasa PT. KAI dan PT. Futake Indonesia. Kegiatan ini bertujuan untuk memberikan wawasan langsung tentang proses perawatan, perbaikan, serta inovasi di bidang transportasi dan manufaktur. Melalui kunjungan ini, siswa dapat melihat penerapan teknologi modern, memahami standar kerja industri, dan menghubungkan teori pembelajaran di sekolah dengan praktik di lapangan.'),
(3, '1755093557.png', '2025-08-16', 'smk n 3 banjar', 'Kunjungan Industri Jurusan TBSM ke BLPT Jogjakarta 2023', 'Pada tahun 2023, Jurusan Teknik dan Bisnis Sepeda Motor (TBSM) melaksanakan kunjungan industri ke Balai Latihan Pendidikan Teknik (BLPT) Yogyakarta. Kegiatan ini memberikan kesempatan bagi siswa untuk mempelajari teknologi, peralatan, serta prosedur perawatan dan perbaikan sepeda motor secara langsung. Melalui kunjungan ini, siswa dapat menambah wawasan, meningkatkan keterampilan teknis, dan memahami penerapan ilmu yang telah dipelajari di sekolah dalam dunia kerja nyata.'),
(46, '1755570745.png', '2025-08-14', 'cxdf', 'cxf', 'cx');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `massage`) VALUES
(5, 'agus yanto', 'aguss@gmail.com', '85803304658', 'asscd', 'wa');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `description`, `category`) VALUES
(2, '1754963181.png', 'lomba smk', 'peserta lomba', 'menang lomba gobak sodor yang di adakan di smk dan saya memenangkan kannya di juara pertama dengan per regu terdapat 5 orang\r\n\r\n\r\n', 'prestasi'),
(3, '1755135374.png', 'Personal profile di back end', 'Project PKL', 'Bagian back-end pada project Personal Profile ini berfungsi sebagai pengelola data dinamis yang ditampilkan di halaman profil. Sistem ini dibangun menggunakan bahasa pemrograman PHP dengan basis data MySQL untuk menyimpan dan mengelola informasi pengguna, keterampilan, pengalaman, portofolio, serta data kontak.', 'progemming'),
(4, '1755135509.png', 'personal profile front end', 'Project PKL', '\r\n\r\nBagian front-end pada project Personal Profile berfokus pada tampilan dan interaksi pengguna. Sistem ini dibangun menggunakan HTML, CSS, dan JavaScript, serta memanfaatkan framework Bootstrap untuk mempercepat pembuatan desain yang responsif dan modern.', 'progemming');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(2, '2023-2026', 'SMK N 3 BANJAR', 'BANJAR', 'pelajar smk\r\n'),
(3, '2025-Sekarang', 'PT LAUWBA TECNO INDONESIA', 'Jogja', 'pelajar pkl ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`, `description`) VALUES
(2, 'bi bi-palette', 'Design', 'Kami menghadirkan layanan desain kreatif yang memadukan estetika dan fungsi. Setiap desain dibuat dengan detail yang memperhatikan warna, tipografi, dan komposisi agar menghasilkan karya visual yang memukau serta mudah dipahami'),
(3, 'bi-code-slash', 'coding', 'Merancang dan mengembangkan website responsif, cepat, dan aman dengan teknologi modern. Memberikan solusi web yang sesuai kebutuhan, mulai dari tampilan hingga fungsi yang optimal.'),
(4, 'bi-film ', ' Video Editing / Multimedia', 'Menghadirkan konten visual yang menarik dan profesional melalui proses editing video, animasi, dan efek kreatif. Cocok untuk promosi, dokumentasi acara, maupun kebutuhan media sosial agar pesan tersampaikan dengan maksimal.'),
(6, 'bi-palette2', ' UI/UX Design', 'Merancang antarmuka yang estetis dan pengalaman pengguna yang intuitif untuk memastikan setiap interaksi terasa nyaman, mudah, dan menyenangkan. Menggabungkan kreativitas dengan riset demi hasil desain yang efektif.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `description`) VALUES
(1, 'html', 78, 'Saya menguasai HTML untuk membangun struktur halaman web yang bersih, semantik, dan responsif, menjadi pondasi utama dalam setiap pengembangan website yang saya kerjakan'),
(2, 'php', 76, 'Aku menggunakan PHP untuk membuat website yang bisa ‘berinteraksi’ dengan pengguna, dari formulir sederhana sampai sistem manajemen data yang kompleks.'),
(3, 'renang', 80, 'Mampu berenang dengan teknik dan stamina yang baik.'),
(4, 'lari', 85, 'Memiliki ketahanan dan kecepatan dalam aktivitas berlari.'),
(5, 'sebak bola', 80, 'Sepakbola adalah olahraga tim yang dimainkan dengan kaki untuk memasukkan bola ke gawang lawan.'),
(6, 'tinju', 90, 'Tinju adalah olahraga bela diri yang mengandalkan pukulan dan strategi untuk meraih kemenangan.');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(1, 'bi bi-tiktok', 'https://apps.microsoft.com/detail/xpff8q4zp7q321?hl=en-US&gl=US'),
(2, 'bi bi-github', 'https://www.google.com/search?q=40k+dolar+berapa+rupiah&sca_esv=bea007f568d2973c&rlz=1C1GCEA_enID1117ID1117&sxsrf=AE3TifNPFO_iS-2qMXVBFWtQ0JVZGwsMpw%3A1755148167058&ei=h2-daPmqA-aTseMPo_KBoQ8&ved=0ahUKEwi5ipq4xImPAxXmSWwGHSN5IPQQ4dUDCBA&uact=5&oq=40k+dolar+berapa+rupiah&gs_lp=Egxnd3Mtd2l6LXNlcnAaAhgCIhc0MGsgZG9sYXIgYmVyYXBhIHJ1cGlhaDIFEAAYgAQyCBAAGIAEGKIEMggQABiABBiiBDIIEAAYgAQYogQyCBAAGIAEGKIEMggQABiABBiiBEiLF1DtBVj0E3ABeAGQAQCYAUugAdUBqgEBM7gBA8gBAPgBAZgCBKAC-QHCAgoQABiwAxjWBBhHwgINEAAYgAQYsAMYQxiKBcICEBAAGIAEGLADGEMYigUYiwPCAgYQABgHGB7CAgcQABiABBgKwgIIEAAYBxgKGB7CAgcQIxiwAhgnwgIGEAAYDRgewgIIEAAYBRgNGB6YAwCIBgGQBgqSBwE0oAe9ErIHATO4B-wBwgcFMi0zLjHIBx4&sclient=gws-wiz-serp'),
(3, 'bi bi-instagram', 'https://www.google.com/search?q=wikipedia&rlz=1C1GCEA_enID1117ID1117&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'agus', 'aguss@gmail.com', '123\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
