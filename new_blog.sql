-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2022 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `new_blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Real Madrid FC', 'real-madrid-fc', NULL, NULL),
(2, 'Bạch Lộc', 'bach-loc', NULL, NULL),
(3, 'UEFA Champions League', 'uefa-champions-league', NULL, NULL),
(4, 'Cảnh Sát Vinh Dự', 'canh-sat-vinh-du', NULL, NULL),
(5, 'Chuyển nhượng bóng đá', 'chuyen-nhuong-bong-da', NULL, NULL),
(6, 'Bóng đá', 'bong-da', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Hay lắm', 2, 2, '2022-06-07 20:07:25', '2022-06-07 20:07:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_12_011712_create_categories_table', 1),
(5, '2022_04_12_011735_create_posts_table', 1),
(6, '2022_04_12_011821_create_comments_table', 1),
(7, '2022_04_12_011852_create_contacts_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_counts` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `new_posts` tinyint(1) NOT NULL DEFAULT 0,
  `hidden` tinyint(1) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `highlight_post` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `image`, `view_counts`, `user_id`, `new_posts`, `hidden`, `slug`, `categories_id`, `highlight_post`, `created_at`, `updated_at`) VALUES
(1, 'Đội hình hay nhất Cúp C1: Real Madrid áp đảo, \\\"vua kiến tạo\\\" Fernandes mất tích', 'Liên đoàn bóng đá châu Âu (UEFA) vừa công bố đội hình xuất sắc nhất Champions League 2021/22.', '<p><span style=\\\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\\\">Chiều 31/5, UEFA đã công bố đội hình hay nhất Champions League mùa giải 2021/22 theo sơ đồ 4-3-3 do Ban giám sát kỹ thuật lựa chọn. Đây cũng là sơ đồ mà nhà vô địch&nbsp;</span><a class=\\\"TextlinkBaiviet\\\" href=\\\"https://www.24h.com.vn/real-madrid-c48e1522.html\\\" style=\\\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\\\" title=\\\"Real\\\">Real</a><span style=\\\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\\\">&nbsp;Madrid và á quân&nbsp;</span><a class=\\\"TextlinkBaiviet\\\" href=\\\"https://www.24h.com.vn/liverpool-c48e1528.html\\\" style=\\\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\\\" title=\\\"Liverpool\\\">Liverpool</a><span style=\\\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\\\">&nbsp;chủ yếu sử dụng trong mùa giải vừa qua.</span></p>', 'E42pj_Tranh-cai-doi-hinh-hay-nhat-Cup-C1-Real-ap-dao-3-1653991536-849-width740height740.jpg', 10000, 1, 1, 1, 'request-name-FO', 1, 0, NULL, NULL),
(2, 'Real CHÍNH THỨC đón siêu hậu vệ Rudiger, Vua châu Âu như \\\"hổ thêm cánh\\\"', 'Real Madrid xác nhận có sự phục vụ của trung vệ xuất sắc hàng đầu châu Âu, Antonio Rudiger từ Chelsea.', '<p><span style=\\\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\\\">Tối 2/6 (giờ Việt Nam), trang Twitter chính thức của&nbsp;</span><a class=\\\"TextlinkBaiviet\\\" href=\\\"https://www.24h.com.vn/real-madrid-c48e1522.html\\\" style=\\\"font-family: Roboto-Regular; font-size: 15px; text-decoration-line: none; padding: 0px; margin: 15px 0px; box-sizing: border-box; transition: all 0.3s ease 0s; line-height: 24px; color: rgb(0, 0, 238);\\\" title=\\\"Real\\\">Real</a><span style=\\\"color:rgb(37, 37, 37); font-family:roboto-regular; font-size:15px\\\">&nbsp;Madrid xác nhận đã đạt&nbsp;chiêu mộ thành công hậu vệ Antonio Rudiger từ Chelsea dưới dạng chuyển nhượng tự do.&nbsp;Theo chuyên gia săn tin chuyển nhượng Fabrizio Romano, hợp đồng giữa đôi bên&nbsp;có thời hạn tới năm 2026 không kèm điều khoản gia hạn hay phụ phí. Siêu sao người Đức cũng là tân binh đầu tiên của \\\"đội bóng Hoàng gia\\\" ở kỳ chuyển nhượng hè 2022.</span></p>', '6fBr7_Real-CHiNH-THuC-don-sieu-hau-ve-Rudiger-vua-chau-au-nhu-fupqfkuxeacq739--2--1654170998-835-width740height429.jpg', 10560, 1, 0, 1, 'request-name-kL', 6, 1, NULL, '2022-06-07 20:07:26'),
(3, 'Báo Thái Lan hú hồn với màn thoát thua phút bù giờ, thừa nhận U23 Việt Nam khó chơi', 'Báo chí Thái Lan đều tỏ ra hài lòng sau trận hòa 2-2 của U23 Thái Lan trước U23 Việt Nam trong ngày ra quân tại VCK U23 châu Á.', '<p>Với lực lượng rất nổi bật với 9 cầu thủ đang chơi bóng tại châu Âu được bổ sung sau SEA Games, U23 Thái Lan thậm chí được đánh giá nhỉnh hơn so với U23 Việt Nam trước khi trận đấu diễn ra. Dù vậy, diễn biến của trận đấu lại cho thấy điều ngược lại khi nhà vô địch SEA Games 31 vẫn giữ được bản lĩnh và cách chơi đầy hiệu quả dù tân HLV&nbsp;Gong Oh-kyun chưa có nhiều thời gian để làm việc với các học trò.</p>\\r\\n\\r\\n<p>Cả 2 lần vượt lên dẫn trước của U23 Việt Nam đều là những tình huống mà chúng ta chủ động dứt điểm và gây bất ngờ cho đối phương bằng khả năng phối hợp đầy tốc độ. Dẫu vậy, U23 Thái Lan cũng cho thấy sự lì lợm khi cũng 2 lần đưa trận đấu trở lại vạch xuất phát. Đáng chú ý, bàn gỡ hòa của thầy trò HLV&nbsp;Worrawoot đến ở những phút bù giờ cuối trận.</p>', 'EjFIB_thai-lan-1-740-1654194652-543-width740height693.jpg', 10020, 4, 0, 1, 'request-name', 6, 1, NULL, '2022-06-07 19:51:43'),
(4, '[22.06.02] Poster Cảnh Sát Vinh Dự', 'Dưới sự dẫn dắt của sư phụ, sự đồng hành của những người bạn tốt, Hạ Khiết đã ngày một trưởng thành 💙', '<div dir=\\\"auto\\\" style=\\\"font-family: \\\"><span style=\\\"font-family:inherit\\\"><img alt=\\\"🔻\\\" src=\\\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9c/1/16/1f53b.png\\\" style=\\\"border:0px; height:16px; width:16px\\\" /></span>Cảnh Sát Vinh Dự” là bộ phim kể về cuộc sống và công việc của cảnh sát nhân dân cấp cơ sở. Bốn cảnh sát mới được nhận vào công tác tại đồn cảnh sát Bát Lí Hà, đối mặt với áp lực công việc to lớn và thử thách mới của thời đại truyền thông, họ đã trải qua nhiều khó khăn, trắc trở, hoài nghi chính mình và thậm chí bỏ cuộc, cuối cùng trưởng thành dưới sự giúp đỡ của các tiền bối.</div>\\r\\n\\r\\n<div dir=\\\"auto\\\" style=\\\"font-family: \\\"><span style=\\\"font-family:inherit\\\"><img alt=\\\"🎋\\\" src=\\\"https://static.xx.fbcdn.net/images/emoji.php/v9/t35/1/16/1f38b.png\\\" style=\\\"border:0px; height:16px; width:16px\\\" /></span> Diễn viên chính: Trương Nhược Quân, Bạch Lộc, Ninh Lý, Từ Khai Sính.....</div>\\r\\n\\r\\n<div dir=\\\"auto\\\" style=\\\"font-family: \\\"><span style=\\\"font-family:inherit\\\"><img alt=\\\"🎋\\\" src=\\\"https://static.xx.fbcdn.net/images/emoji.php/v9/t35/1/16/1f38b.png\\\" style=\\\"border:0px; height:16px; width:16px\\\" /></span>Diễn viên khách mời: Vương Cảnh Xuân</div>\\r\\n\\r\\n<div dir=\\\"auto\\\" style=\\\"font-family: \\\"><span style=\\\"font-family:inherit\\\"><img alt=\\\"🥝\\\" src=\\\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f95d.png\\\" style=\\\"border:0px; height:16px; width:16px\\\" /></span> Phim gồm 38 tập, phát sóng vào mỗi tối từ 19h (VN) 28/5 trên iQiyi</div>\\r\\n\\r\\n<div dir=\\\"auto\\\" style=\\\"font-family: \\\">- Tài khoản vip ngày đầu chiếu 6 tập, những ngày tiếp theo chiếu 2 tập</div>\\r\\n\\r\\n<div dir=\\\"auto\\\" style=\\\"font-family: \\\">- Tài khoản thường ngày đầu chiếu 2 tập, những ngày tiếp theo chiếu 1 tập vào 21h30 (VN)</div>', '9UvKA_Police.jpg', 10020, 1, 1, 1, 'request-name-oG', 4, 0, NULL, '2022-06-07 19:47:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, '$2y$10$/NNt3mL4Q76fGDKHjoJvouWxM6YHCIuMZf2fXdShdOa62Y.LlLoMm', NULL, NULL),
(2, 'Tuấn Anh', 'tuananh9988@gmail.com', 1, '$2y$10$/NNt3mL4Q76fGDKHjoJvouWxM6YHCIuMZf2fXdShdOa62Y.LlLoMm', NULL, NULL),
(3, 'Hoa', 'nguyen@gmail.com', 0, '$2y$10$/NNt3mL4Q76fGDKHjoJvouWxM6YHCIuMZf2fXdShdOa62Y.LlLoMm', NULL, NULL),
(4, 'Good', 'pham@gmail.com', 0, '$2y$10$/NNt3mL4Q76fGDKHjoJvouWxM6YHCIuMZf2fXdShdOa62Y.LlLoMm', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_categories_id_foreign` (`categories_id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
