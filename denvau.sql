-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 05:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denvau`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `featured` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `image`, `content`, `year`, `created_at`, `updated_at`, `slug`, `views`, `featured`) VALUES
(1, 'test nhac', 'art1609491168.jpg', 'nhac hay vai chuong', '2010', '2021-01-01 01:52:48', '2021-01-01 01:52:48', 'test-nhac', 0, 0),
(2, 'Đen Vâu Album', 'art1634654170.jpg', 'Nguyễn Đức Cường (sinh ngày 13 tháng 5 năm 1989), thường được biết đến với nghệ danh Đen Vâu hay Đen là một nam rapper và nhạc sĩ người Việt Nam.', '2021', '2021-10-19 07:34:17', '2021-10-19 07:36:10', 'den-vau-album', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_09_133027_create_events_table', 1),
(5, '2019_10_10_094349_create_albums_table', 1),
(6, '2019_10_10_114450_create_musics_table', 1),
(7, '2019_10_20_094159_alter_music_add_extra', 1),
(8, '2019_10_20_095313_alter_album_add_extra', 1),
(9, '2019_10_23_104849_create_newsletters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `song` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `streams` int(11) NOT NULL DEFAULT 0,
  `featured` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `title`, `content`, `image`, `artist`, `song`, `year`, `album_id`, `created_at`, `updated_at`, `slug`, `views`, `streams`, `featured`) VALUES
(2, 'Đen - hai triệu năm ft. Biên', 'Anh cô đơn giữa tinh không này\r\nMuôn con sóng cuốn xô vào đây\r\nEm cô đơn giữa mênh mông người\r\nVà ta cô đơn đã hai triệu năm...', 'art1634654771.jpg', 'Đen Vâu', 'den-hai-trieu-nam-ft-bien.mp3', '2021', 2, '2021-07-24 08:17:42', '2021-10-19 07:46:12', 'ooo', 2, 0, 0),
(3, 'Đen - Lối Nhỏ ft. Phương Anh Đào', 'Em vào đời bằng đại lộ còn anh vào đời bằng lối nhỏ\r\nAnh nhớ mình đã từng thổ lộ anh nhớ rằng em đã chối bỏ\r\nAnh nhớ chuyến xe buổi tối đó trên xe chỉ có một người ngồi\r\nAnh thấy thật buồn nhưng nhẹ nhõm anh nhớ mình đã mỉm cười rồi…', 'art1634654847.jpg', 'Đen Vâu', 'den-loi-nho-ft-phuong-anh-dao.mp3', '2021', 2, '2021-10-19 07:33:33', '2021-10-19 07:47:27', 'sadasd', 0, 0, 0),
(4, 'Đen - một triệu like ft. Thành Đồng', 'Một cái beat thật chill đưa ta về với bản chất\r\nDenvau keep it real, rap theo kiểu đơn giản nhất\r\nCuộc chơi đi hơi xa, hơn cả thứ mà ta từng mơ về\r\nBật cho ta con beat, coi Denvau tiếp tục làm thơ nà\r\nCon gấu kiếm ăn đủ, thì nó mới có thể ngủ đông\r\nĐại bàng tập đập cánh, trước cả khi nó đã đủ lông\r\nChịu nhiều vết thương nhất, mới đủ sức làm con sói đầu đàn\r\nCon người trong nghịch cảnh, càng không được phép chịu đầu hàng', 'art1634654919.jpg', 'Đen Vâu', 'den-mot-trieu-like-ft-thanh-dong.mp3', '2021', 2, '2021-10-19 07:48:39', '2021-10-19 07:48:39', 'den-mot-trieu-like-ft-thanh-dong', 0, 0, 0),
(5, 'Đen - Trời hôm nay nhiều mây cực!', 'Trời hôm nay nhiều mây cực\r\nĐặt bàn tay mình ngay ngực\r\nNghe con tim mình xóc nảy\r\nChiều mướt mải làn tóc bay…', 'art1634655044.jpg', 'Đen Vâu', 'den-troi-hom-nay-nhieu-may-cuc.mp3', '2021', 2, '2021-10-19 07:50:44', '2021-10-19 07:50:44', 'den-troi-hom-nay-nhieu-may-cuc', 0, 0, 0),
(6, 'Đen ft. MIN - Bài Này Chill Phết', 'I just wanna chill with you tonight\r\nAnd all the sorrow left behind uh oh\r\nSometimes I feel lost in the crowd\r\nLife is full of ups and downs\r\nBut it’s alright, I feel peaceful inside', 'art1634655141.jpg', 'Đen Vâu', 'den-ft-min-bai-nay-chill-phet.mp3', '2021', 2, '2021-10-19 07:52:21', '2021-10-19 07:52:21', 'den-ft-min-bai-nay-chill-phet', 0, 0, 0),
(7, 'Đen x JustaTee - Đi Về Nhà', 'Đường về nhà là vào tim ta\r\nDẫu nắng mưa gần xa.\r\nThất bát, vang danh\r\nNhà vẫn luôn chờ ta.\r\nĐường về nhà là vào tim ta\r\nDẫu có muôn trùng qua.\r\nVật đổi, sao dời\r\nNhà vẫn luôn là nhà.', 'art1634655327.jpg', 'Đen Vâu', 'den-x-justatee-di-ve-nha.mp3', '2010', 0, '2021-10-19 07:55:28', '2021-10-19 07:55:28', 'den-x-justatee-di-ve-nha', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$nkl4zgEaGOy8HUAdkWBx9uRDy6AwgBGapUeh2itT/l.IdJnfY4pke', NULL, NULL, NULL),
(2, 'phuc', 'phuc@gmail.com', NULL, '$2y$10$D7jGDA4PANbdk3MQdbbKmOejA71yKtrDoctzlEtgZs8AnHNk2Jjo2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_id_index` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `musics_id_index` (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsletters_id_index` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
