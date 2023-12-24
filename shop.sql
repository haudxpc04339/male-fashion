-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 26, 2023 lúc 12:10 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_11_105502_create_products_table', 2),
(6, '2023_07_12_070723_create_product_categories_table', 3),
(7, '2023_07_14_060944_update_users_table', 4),
(8, '2023_07_16_092709_create_post_categories_table', 5),
(9, '2023_07_17_112711_drop_role_id_from_users_table', 6),
(10, '2023_07_17_113301_add_role_as_to_users_table', 7),
(11, '2023_07_23_075258_create_posts_table', 8),
(12, '2023_07_23_085848_update_posts_table', 9),
(13, '2023_07_23_095339_update_view_to_posts_table', 10),
(14, '2023_07_24_150026_create_orders_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `total`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 'Sage Kulas', 'kiera.hansen@hotmail.com', '+17725413466', '35643 Romaine Skyway\nKuphalland, KY 88978', 33.00, 0, 4, '2023-07-24 08:36:16', NULL),
(12, 'Mr. Eloy Auer', 'deshaun09@renner.biz', '+12076715003', '41376 Schamberger Mountain Suite 046\nFarrellmouth, IA 19992-4684', 721.00, 0, 3, '2023-07-24 08:36:16', NULL),
(13, 'Prof. Micheal Lockman', 'abbigail58@hotmail.com', '+13523262294', '4023 Otto Dale Apt. 036\nNorth Desiree, VA 64588-5533', 222.00, 0, 1, '2023-07-24 08:36:16', NULL),
(14, 'Annie Schumm', 'jjohnston@yahoo.com', '+19408099350', '210 Gislason Plaza Suite 246\nSelenaland, NH 50326', 837.00, 0, 5, '2023-07-24 08:36:16', NULL),
(15, 'Ellen Mitchell', 'ujohnston@hotmail.com', '+14798240344', '21470 April Coves Apt. 471\nEast Gregg, AL 65058-5089', 238.00, 0, 2, '2023-07-24 08:36:16', NULL),
(16, 'Angelica Rath', 'vidal.champlin@cole.org', '+18307974719', '6107 Klocko Forges Apt. 709\nJoelborough, NJ 54363-0350', 9129.00, 0, 1, '2023-07-24 08:36:16', NULL),
(17, 'Dr. Harvey Smitham DVM', 'larissa.borer@krajcik.com', '+15754325411', '55871 Jamey Mews\nLake Gregoryburgh, DC 95724-0657', 2817.00, 0, 1, '2023-07-24 08:36:16', NULL),
(18, 'Carmela Powlowski', 'salma.white@veum.biz', '+16288915533', '1001 Monique Viaduct Suite 488\nHuelsshire, OH 62954', 970912.00, 0, 9, '2023-07-24 08:36:16', NULL),
(19, 'Mrs. Maryse Schiller', 'deontae.howe@gmail.com', '+16806079281', '351 Reichel Plains Apt. 550\nRoscoefurt, LA 31806-5489', 3.00, 0, 4, '2023-07-24 08:36:16', NULL),
(20, 'Anya Stokes', 'vstreich@hotmail.com', '+19189854917', '956 Gabriella Glens\nTwilafort, FL 70035-2736', 217774.22, 0, 4, '2023-07-24 08:37:03', NULL),
(21, 'Keanu Bergstrom V', 'nicolas65@becker.com', '+17042479666', '38184 Braden Station Apt. 677\nNew Cielo, CT 75450', 0.60, 0, 1, '2023-07-24 08:37:03', NULL),
(22, 'Mariana Pfeffer', 'thaddeus50@gmail.com', '+16785556409', '5775 Heidenreich Station Apt. 607\nEast Victorberg, IN 15400-2899', 10174.29, 0, 8, '2023-07-24 08:37:03', NULL),
(23, 'Krista Murray', 'ohara.carolyne@yahoo.com', '+19255208909', '247 Kihn Ferry Suite 007\nVancehaven, MS 89921', 117595.00, 0, 4, '2023-07-24 08:37:34', NULL),
(24, 'Eladio Breitenberg', 'lisette69@king.com', '+12766409352', '786 O\'Keefe Mountains\nSydnieport, OH 94078-4280', 80.00, 0, 3, '2023-07-24 08:37:34', NULL),
(25, 'Mrs. Alexandra Buckridge Sr.', 'benedict72@larkin.com', '+16023884466', '896 Keebler Mountain\nKarliechester, CT 71530-6267', 534033.86, 0, 3, '2023-07-24 08:38:02', NULL),
(26, 'Dr. Jovanny Walker', 'kuhlman.pietro@connelly.info', '+18603173822', '1977 Runolfsdottir Estate\nNorth Carolina, OR 38883-2338', 24.00, 0, 8, '2023-07-24 08:40:10', NULL),
(27, 'Dr. Alberto Bergnaum I', 'hegmann.roman@gmail.com', '+16124688335', '8395 Orn Run\nLake Shanonberg, KY 09952', 54.00, 0, 6, '2023-07-24 08:40:10', NULL),
(28, 'Macy Jenkins DVM', 'russel.meredith@schroeder.com', '+14425381505', '2161 Hickle Highway\nLake Carroll, CO 52259-0037', 36.00, 0, 4, '2023-07-24 08:40:10', NULL),
(29, 'Mr. Nickolas Terry', 'strosin.ava@weissnat.com', '+19523931461', '6545 Pauline Bridge\nJohnsville, LA 38141', 39.00, 0, 4, '2023-07-24 08:40:10', NULL),
(30, 'Nathanael Feest DDS', 'buster.bernier@marks.com', '+12102170319', '62402 Garry Lakes\nMaeveville, NM 03174-9553', 22.00, 0, 2, '2023-07-24 08:40:10', NULL),
(31, 'Alanna Greenfelder', 'dayton36@gmail.com', '+13192102864', '174 Bobby Spurs\nMoenshire, NJ 51339-2456', 64.00, 0, 7, '2023-07-24 08:40:10', NULL),
(32, 'Mr. Sheldon Sipes', 'upollich@koch.org', '+15804491006', '6198 Pagac Club Apt. 457\nNorth Berenice, MD 05708-7706', 72.00, 0, 2, '2023-07-24 08:40:10', NULL),
(33, 'Tristian Cormier DVM', 'nbatz@hotmail.com', '+16163450261', '560 Rempel Knolls\nWest Jaylen, CT 12859-0554', 58.00, 0, 2, '2023-07-24 08:40:10', NULL),
(34, 'Destiny Nicolas', 'brook.rutherford@mckenzie.biz', '+19206708085', '6885 Audrey Ports Suite 567\nOrlotown, FL 06862-1604', 63.00, 0, 8, '2023-07-24 08:40:10', NULL),
(35, 'Chyna Romaguera DVM', 'mreilly@sporer.com', '+17728862960', '7625 Wuckert Orchard\nWest Kathlyn, NV 44429', 49.00, 0, 1, '2023-07-24 08:40:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `description`, `content`, `thumbnail`, `view`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'ĐÓN ĐẠI LỄ, SĂN SALE SIÊU DỄ', 'don-dai-le-san-sale-sieu-de', 'Dịp nghỉ lễ này bạn sẽ đi đâu? Hoà cùng bầu không khí đón đại lễ lớn, Male Fashion tung ra hàng loạt ưu đãi mua hàng vô cùng hấp dẫn 🤩', '<p>dfskdfsdjf</p>', 'uploads/posts/1690106270-product.jpg', 0, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thời trang xu hướng mới 1', NULL, '2023-07-16 03:04:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `content`, `thumbnail`, `price`, `sale_price`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Áo thun nam in họa tiết bông hoa', 'ao-thun-nam-in-hoa-tiet-bong-hoa', '<p>Khởi động mùa hè với mẫu áo&nbsp;<strong>Male Fashion&nbsp;</strong>được làm từ vải Cotton 4 chiều thoáng mát, thấm hút nước phù hợp cho những ngày năng động</p><p>Kiểu áo: Tay ngắn, cổ tròn</p>', 'quá đẹp', 'uploads/products/1689697786-product.jpg', 325000, 0, 4, NULL, NULL),
(6, 'Giày Male Fashion', 'giay-male-fashion', '<p>Màu chủ đạo đen trắng</p>', 'jkhaskf', 'uploads/products/1690262276-product.jpg', 450000, 0, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(4, 'Men', NULL, NULL, '2023-07-16 02:04:42'),
(5, 'Women', NULL, NULL, '2023-07-16 02:05:19'),
(6, 'Bags', NULL, NULL, '2023-07-16 02:05:41'),
(7, 'Shoes', NULL, NULL, '2023-07-16 02:06:08'),
(8, 'Clothing', NULL, NULL, '2023-07-16 02:06:32'),
(9, 'Kids', NULL, NULL, '2023-07-16 02:07:04'),
(10, 'Accessories', NULL, NULL, '2023-07-16 02:13:58'),
(11, 'Nike', NULL, NULL, '2023-07-17 18:13:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `address`, `role_as`) VALUES
(2, 'admin', 'dangxuanhau2611@gmail.com', NULL, '$2y$10$tpc36kzs6dWYL03I6DdAFeGPcH2pEqGRDp98W8BprUFZT0MYcOTWu', NULL, NULL, '2023-07-15 07:43:42', '2023-07-15 07:43:42', '0377531342', 'Kiên Giang', 1),
(3, 'user', 'user123@gmail.com', NULL, '$2y$10$IEaD9c6FTDQ5jt4gNDwF5eQN8fcqz8CtyX.TYeoas8gsogSqJR7Ni', NULL, NULL, '2023-07-15 07:42:47', '2023-07-15 07:42:47', '0377531342', NULL, 0),
(4, 'Dang Xuan Hau (FPL CT K17)', 'haudxpc04339@fpt.edu.vn', NULL, NULL, '112894059929120867879', NULL, '2023-07-20 08:57:20', '2023-07-20 08:57:20', NULL, NULL, 0),
(5, 'Hau Dang', 'dangxuanhau248@gmail.com', NULL, NULL, '106072576522499548989', NULL, '2023-07-20 08:58:52', '2023-07-20 08:58:52', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
