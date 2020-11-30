-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 01:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalDoctor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `phone`, `totalDoctor`, `created_at`, `updated_at`) VALUES
(2, 'Nhi Đồng', '334343434343', 3, '2020-11-19 09:29:38', '2020-11-27 01:44:03'),
(3, 'Khoa ung bứu', '1234567', 0, '2020-11-19 18:39:33', '2020-11-20 21:56:52'),
(5, 'Khoa sản', '1122', 1, '2020-11-20 21:33:05', '2020-11-23 04:37:07'),
(6, 'khoa tiêu hóa', '12345678', 1, '2020-11-21 18:13:56', '2020-11-24 09:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `code`, `name`, `clinic_id`, `phone`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 'N123', 'Doctor Mundo', 5, '1234321', 'upload/1606131401.jpeg', NULL, '2020-11-23 04:36:41', '2020-11-23 04:37:07'),
(11, 'N321', 'Doctor Mundo 1', 6, '1235431', 'upload/1606234960.jpg', NULL, '2020-11-24 09:22:40', '2020-11-24 09:22:40'),
(12, '13131', '12312312', 2, '131231231', 'upload/1606466643.png', NULL, '2020-11-27 01:44:03', '2020-11-27 01:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `cover`, `content`, `status`, `location`, `StartTime`, `EndTime`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'testffffffffffffffffff', 'upload/1603114702.PNG', '<p>test</p>', 1, 'hà nội', '2020-10-19 20:42:00', '2020-10-30 20:38:00', 3, NULL, '2020-10-19 13:38:22', '2020-10-19 13:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `examination_schedules`
--

CREATE TABLE `examination_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examination_schedules`
--

INSERT INTO `examination_schedules` (`id`, `name`, `email`, `identity`, `phone`, `date`, `time`, `doctor_id`, `clinic_id`, `status`, `symptom`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Thanh Vinh', 'thanhvinh200293@gmail.com', '1234567890', '123456789', '2020-11-25', '1', 11, 6, 'pendding', 'đau bụng', NULL, '2020-11-25 08:51:04', '2020-11-25 08:51:04'),
(7, 'Thanh Vinh', 'thanhvinh200293@gmail.com', '0765432', '654321', '2020-11-25', '9', 10, 5, 'pendding', 'uytrew', NULL, '2020-11-25 09:08:43', '2020-11-25 09:08:43'),
(8, 'Thanh Vinh', 'thanhvinh200293@gmail.com', '1234567890', '1234567890', '2020-11-30', '17', 11, 6, 'pendding', 'sdfsdfsdfsdfsdf', NULL, '2020-11-25 09:57:24', '2020-11-25 09:57:24'),
(9, '112121', '1@gmail.com', '2123131', '1231312312', '2020-11-26', '1', 10, 5, 'pendding', 'Trĩ', NULL, '2020-11-25 19:34:16', '2020-11-25 19:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_examinations`
--

CREATE TABLE `history_examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnostic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_10_07_190135_create_tags_table', 2),
(6, '2020_10_14_182848_create_posts_table', 3),
(8, '2020_10_16_205513_add_column_to_posts_table', 4),
(9, '2020_10_19_184754_add_role_name_to_user_table', 5),
(10, '2020_10_19_194328_create_post_tags_table', 6),
(11, '2020_10_19_200930_create_events_table', 7),
(12, '2020_10_30_195550_create_donate_posts_table', 8),
(13, '2020_11_19_161207_create_clinics_table', 9),
(14, '2020_11_21_064311_create_doctors_table', 10),
(15, '2020_11_18_132331_create_employees_table', 11),
(16, '2020_11_18_133523_create_blogs_table', 11),
(17, '2020_11_18_133946_create_news_table', 11),
(18, '2020_11_18_134254_create_history_examinations_table', 12),
(19, '2020_11_18_134637_create_examination_schedules_table', 13),
(21, '2020_11_26_070145_create_posts_table', 14),
(22, '2020_11_26_085351_create_tags_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('thanhvinh@gmail.com', '$2y$10$Xk.eD.cS/Thv/pj2bgJs0.5aTOUBcxaWtMqXxzg0ZVmGJ/6a4agrK', '2020-11-19 08:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagId` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `body`, `tagId`, `author`, `coverImage`) VALUES
(3, '2020-11-26 17:00:00', NULL, 'Tập trung thực hiện mục tiêu kép, không lơ là phòng chống dịch', '<p>Trường hợp người nhập cảnh v&agrave;o Việt Nam thực hiện c&aacute;ch ly tập trung tại c&aacute;c doanh trại qu&acirc;n đội, c&aacute;c trường của qu&acirc;n đội, cơ sở kh&aacute;c do cơ quan nh&agrave; nước c&oacute; thẩm quyền chỉ định l&agrave;m nơi c&aacute;ch ly tập trung phải tự chi trả c&aacute;c chi ph&iacute; tiền ăn; c&aacute;c chi ph&iacute; phục vụ nhu cầu sinh hoạt trong những ng&agrave;y c&aacute;ch ly y tế.</p>\r\n\r\n<h2>1. Bộ Y tế cập nhật t&igrave;nh h&igrave;nh dịch bệnh COVID-19</h2>\r\n\r\n<p>T&iacute;nh đến 9h00 ng&agrave;y 21/9/2020, theo thống k&ecirc; của worldometers.info:</p>\r\n\r\n<p>*Thế giới: 31.228.490 người mắc; 965.036 người tử vong, 22.821.311 người khỏi bệnh.</p>\r\n\r\n<p>215 quốc gia, v&ugrave;ng l&atilde;nh thổ (trong đ&oacute; c&oacute; 2 t&agrave;u du lịch) ghi nhận ca mắc COVID-19.<br />\r\n&ndash; Việt Nam đứng thứ 165/215 quốc gia, v&ugrave;ng l&atilde;nh thổ c&oacute; ca mắc tr&ecirc;n thế giới; 7/11 quốc gia c&oacute; ca mắc trong khu vực Đ&ocirc;ng Nam &Aacute;. Tại khu vực ASEAN, tất cả c&aacute;c quốc gia trong khu vực đều c&oacute; người mắc bệnh.</p>\r\n\r\n<p>* Việt Nam: 1068 ca mắc COVID-19</p>\r\n\r\n<p>Trong đ&oacute;:</p>\r\n\r\n<p>&ndash; Số ca điều trị khỏi: 942 ca.</p>\r\n\r\n<p>&ndash; Số ca bệnh đang được điều trị: 91 ca.</p>\r\n\r\n<p>&ndash; Số ca tử vong: 35 ca</p>\r\n\r\n<h2>2. Về c&ocirc;ng t&aacute;c chỉ đạo, điều h&agrave;nh</h2>\r\n\r\n<p>Theo đề xuất của Bộ T&agrave;i ch&iacute;nh thực hiện thu ph&iacute; c&aacute;ch ly y tế tập trung đối với c&aacute;c trường hợp nhập cảnh v&agrave;o Việt Nam, nếu người c&oacute; nhu cầu thực hiện c&aacute;ch ly tại kh&aacute;ch sạn, resort, cơ sở kh&aacute;c được chọn l&agrave;m nơi c&aacute;ch ly tập trung v&agrave; được cơ quan c&oacute; thẩm quyền chấp thuận th&igrave; c&aacute; nh&acirc;n tự chi trả c&aacute;c chi ph&iacute; về ăn, ở, sinh hoạt trong thời gian c&aacute;ch ly cho kh&aacute;ch sạn, resort, cơ sở kh&aacute;c theo mức gi&aacute; do kh&aacute;ch sạn, resort, cơ sở kh&aacute;c quy định.</p>\r\n\r\n<p><img alt=\"Tập trung thực hiện mục tiêu kép, không lơ là phòng chống dịch\" src=\"https://benhvienthucuc.vn/wp-content/uploads/2020/09/tap-trung-thuc-hien-muc-tieu-kep-khong-lo-la-phong-chong-dich-450x600.jpg\" style=\"height:600px; width:450px\" /></p>\r\n\r\n<p>Th&ocirc;ng điệp 5K của Bộ Y tế</p>\r\n\r\n<p>Trường hợp người nhập cảnh v&agrave;o Việt Nam thực hiện c&aacute;ch ly tập trung tại c&aacute;c doanh trại qu&acirc;n đội, c&aacute;c trường của qu&acirc;n đội, cơ sở kh&aacute;c do cơ quan nh&agrave; nước c&oacute; thẩm quyền chỉ định l&agrave;m nơi c&aacute;ch ly tập trung phải tự chi trả c&aacute;c chi ph&iacute; tiền ăn theo mức 80.000 đồng/ng&agrave;y; c&aacute;c chi ph&iacute; phục vụ nhu cầu sinh hoạt trong những ng&agrave;y c&aacute;ch ly y tế l&agrave; 40.000 đồng/ng&agrave;y.</p>\r\n\r\n<h2>3. Về c&ocirc;ng t&aacute;c điều trị, x&eacute;t nghiệm</h2>\r\n\r\n<p>Theo b&aacute;o c&aacute;o của Tiểu ban Điều trị Ban chỉ đạo Quốc gia ph&ograve;ng, chống dịch COVID-19, đến thời điểm n&agrave;y, nước ta đ&atilde; chữa khỏi cho 942 bệnh nh&acirc;n COVID-19/1.068 ca mắc. Trong số c&aacute;c bệnh nh&acirc;n COVID-19 đang điều trị tại c&aacute;c cơ sở y tế, số ca &acirc;m t&iacute;nh lần 1 với SARS-CoV-2: 14 ca; Số ca &acirc;m t&iacute;nh lần 2 với SARS-CoV-2: 3 ca, số ca &acirc;m t&iacute;nh lần 3 l&agrave; 22 ca.</p>\r\n\r\n<p>B&aacute;o c&aacute;o của Tiểu ban Điều trị cũng cho biết, trong số c&aacute;c bệnh nh&acirc;n đang điều trị hiện c&oacute; trường hợp bệnh nh&acirc;n 793 (BN793) đang điều trị ở BV Bệnh nhiệt đới TW cơ sở 2 hiện l&agrave; người duy nhất c&oacute; t&igrave;nh trạng nặng, tiến triển sức khoẻ ổn định. Hiện bệnh nh&acirc;n đang thở oxy, đ&atilde; chuyển &acirc;m t&iacute;nh &iacute;t nhất 1 lần với SARS-CoV-2.</p>\r\n\r\n<p>Đến thời điểm n&agrave;y số ca tử vong ở nước ta l&agrave; 35 ca. Đa phần c&aacute;c trường hợp tử vong ở nước ta đều l&agrave; người cao tuổi, tr&ecirc;n nền bệnh l&yacute; nặng như suy thận mạn giai đoạn cuối,&nbsp;<a href=\"https://benhvienthucuc.vn/ung-thu-mau-giai-doan-cuoi-song-duoc-bao-lau/\">ung thư m&aacute;u giai đoạn cuối</a>&nbsp;kh&ocirc;ng đ&aacute;p ứng ho&aacute; chất, hội chứng mạch v&agrave;nh, suy h&ocirc; hấp cấp, tho&aacute;i ho&aacute; đa khớp, tăng huyết &aacute;p, suy thượng thận mạn, đ&aacute;i th&aacute;o đường tu&yacute;p 2, nhiễm tr&ugrave;ng huyết, vi&ecirc;m phổi, suy kiệt, suy đa tạng.</p>', 2, 'Hằng Thanh', 'upload/1606468420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Covid 19'),
(2, NULL, NULL, 'Tin tuyển dụng'),
(3, NULL, NULL, 'Sống khỏe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EMPLOYEE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_name`) VALUES
(1, 'Thanh Vinh', 'thanhvinh200293@gmail.com', NULL, '$2y$10$3sFBX8aBI2dcdkFi202U8OgjK3V3ZQjpOEyKUlbBBpRCoQRHN/h96', NULL, '2020-10-12 11:45:34', '2020-10-12 11:45:34', 'EMPLOYEE'),
(2, 'Vinh', 'thanhvinhhumg@gmail.com', NULL, '12345678', NULL, NULL, NULL, 'ADMIN'),
(3, 'Thanh Vinh', 'thanhvinh@gmail.com', NULL, '$2y$10$pNKBS65nZun6lU1bnH0D7eMwMCIccvfe/zR6cKtauJb.uoERl67K.', 'RnrRURtgwnbi9ZqtEBkzprjUK92x5T8OdEc40cMb3Dn9FMSFgh2QAvRTDgWA', '2020-10-19 12:20:47', '2020-10-19 12:20:47', 'ADMIN'),
(4, 'Huệ Xinh Gái', 'admin@gmail.com', NULL, '$2y$10$BYrGKD6L58GAvAhzzTVBSOj3ZD7CWbMlLjy.w6gMX2IeUNjFQ4bqu', NULL, '2020-11-19 08:36:37', '2020-11-19 08:36:37', 'EMPLOYEE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination_schedules`
--
ALTER TABLE `examination_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history_examinations`
--
ALTER TABLE `history_examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examination_schedules`
--
ALTER TABLE `examination_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_examinations`
--
ALTER TABLE `history_examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
