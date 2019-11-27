-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2019 lúc 06:52 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `alley_baker`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `id_pro`, `name`, `unit`, `img`, `price`, `qty`, `total`, `note`, `date`, `payment`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 3, 1, 'Bánh su kem dâu sữa tươi', 'hộp', 'banh-su-kem-ca-phe-1.jpg', 150000, 10, 1500000, 'Giao trước 17h ngày 25/11/2019', '2019-11-24', 'COD', NULL, '2019-11-23 20:44:15', '2019-11-23 21:06:33', 1),
(2, 3, 2, 'Bánh Crepe Chocolate', 'hộp', 'crepe-chocolate.jpg', 160000, 20, 3200000, 'giao trước 20h ngày 25/11/2019', '2019-11-24', 'ATM', NULL, '2019-11-23 21:26:50', '2019-11-25 18:37:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_pro`, `id_type`, `name`, `comment`, `date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 7, 'Nguyễn Ngọc Hiền', 'Bánh ngon và giá cả hợp lí', '2019-11-24 09:52:36', NULL, '2019-11-23 19:52:36', '2019-11-25 18:33:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `id_user`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'Nguyễn Việt Hân', 'nam', 'xethong100@gmail.com', '129/15 đường 154 phường tân phú quận 9', '0368888888', 'Giao trước 17h ngày 25/11/2019', NULL, '2019-11-23 20:44:15', '2019-11-23 20:44:15'),
(2, 3, 'Nguyễn Việt Hân', 'nam', 'xethong100@gmail.com', '129/15 đường 154 phường tân phú quận 9', '0368888888', 'giao trước 20h ngày 25/11/2019', NULL, '2019-11-23 21:26:50', '2019-11-23 21:26:50');

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
(1, '2018_12_23_120000_create_shoppingcart_table', 1),
(2, '2019_11_13_000550_create_product_table', 1),
(3, '2019_11_13_013409_create_type_product_table', 1),
(4, '2019_11_13_024516_create_user_table', 1),
(5, '2019_11_18_004654_create_customer_table', 1),
(6, '2019_11_18_005115_create_bill_table', 1),
(7, '2019_11_18_034730_create_order_cart_table', 1),
(8, '2019_11_18_104500_create_bill_detail_table', 1),
(9, '2019_11_18_153408_create_bill_table', 2),
(10, '2019_11_18_153913_create_customer_table', 3),
(13, '2019_11_18_154008_create_bill_table', 4),
(16, '2019_11_19_025734_create_comment_table', 5),
(17, '2019_11_20_095829_create_comment_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bánh su kem dâu sữa tươi', 7, '', 0.00, 150000, 'banh-su-kem-ca-phe-1.jpg', 'hộp', NULL, NULL, '2019-11-23 19:43:40'),
(2, 'Bánh Crepe Chocolate', 6, '', 180000.00, 160000, 'crepe-chocolate.jpg', 'hộp', NULL, NULL, NULL),
(3, 'Bánh Crepe Sầu riêng-Chuối', 5, '', 150000.00, 120000, 'crepe-chuoi.jpg', 'hộp', NULL, NULL, NULL),
(4, 'Bánh Crepe Đào', 5, '', 160000.00, 150000, 'crepe-dao.jpg', 'hộp', NULL, NULL, NULL),
(5, 'Bánh Crepe Dâu', 5, '', 160000.00, 140000, 'crepedau.jpg', 'hộp', NULL, NULL, NULL),
(6, 'Bánh Crepe Pháp', 5, '', 200000.00, 180000, 'crepe-phap.jpg', 'hộp', NULL, NULL, NULL),
(7, 'Bánh Crepe Táo', 5, '', 160000.00, 130000, 'crepe-tao.jpg', 'hộp', NULL, NULL, NULL),
(8, 'Bánh Crepe Trà xanh', 5, '', 160000.00, 150000, 'crepe-traxanh.jpg', 'hộp', NULL, NULL, NULL),
(9, 'Bánh Crepe Sầu riêng và Dứa', 5, '', 160000.00, 150000, 'saurieng-dua.jpg', 'hộp', NULL, NULL, NULL),
(10, 'Bánh Gato Trái cây Việt Quất', 3, '', 250000.00, 220000, '544bc48782741.png', 'cái', NULL, NULL, NULL),
(11, 'Bánh sinh nhật rau câu trái cây', 3, '', 200000.00, 180000, '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', 'cái', NULL, NULL, NULL),
(12, 'Bánh kem Chocolate Dâu', 3, '', 300000.00, 280000, 'banh kem sinh nhat.jpg', 'cái', NULL, NULL, NULL),
(13, 'Bánh kem Dâu III', 3, '', 300000.00, 280000, 'Banh-kem (6).jpg', '', NULL, NULL, NULL),
(14, 'Bánh kem Dâu I', 3, '', 350000.00, 320000, 'banhkem-dau.jpg', 'cái', NULL, NULL, NULL),
(15, 'Beefy Pizza', 6, 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', 150000.00, 130000, '40819_food_pizza.jpg', 'cái', NULL, NULL, NULL),
(16, 'Hawaii Pizza', 6, 'Sốt cà chua, ham , dứa, pho mai mozzarella', 120000.00, 100000, 'hawaiian paradise_large-900x900.jpg', 'cái', NULL, NULL, NULL),
(17, 'Bánh su kem nhân dừa', 7, '', 120000.00, 100000, 'maxresdefault.jpg', 'cái', NULL, NULL, NULL),
(18, 'Bánh su kem sữa tươi', 7, '', 120000.00, 100000, 'sukem.jpg', 'cái', NULL, NULL, NULL),
(19, 'Bánh su kem sữa tươi chiên giòn', 7, '', 150000.00, 140000, '1434429117-banh-su-kem-chien-20.jpg', 'hộp', NULL, NULL, NULL),
(20, 'Bánh Macaron Pháp', 2, 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.', 200000.00, 180000, 'Macaron9.jpg', 'cái', NULL, NULL, NULL),
(21, 'Bánh Tiramisu - Italia', 2, '', 200000.00, 180000, '234.jpg', 'cái', NULL, NULL, NULL),
(22, 'Bánh Táo - Mỹ', 2, '', 200000.00, 180000, '1234.jpg', 'cái', NULL, NULL, NULL),
(23, 'Bánh French', 1, '', 180000.00, 170000, 'banh-man-thu-vi-nhat-1.jpg', 'hộp', NULL, NULL, NULL),
(24, 'Bánh mặn thập cẩm', 1, '', 50000.00, 45000, 'Fruit-Cake.png', 'hộp', NULL, NULL, NULL),
(25, 'Bánh Muffins trứng', 1, '', 100000.00, 80000, 'maxresdefault.jpg', 'hộp', NULL, NULL, NULL),
(26, 'Bánh Cupcake - Anh Quốc', 6, '', 0.00, 120000, 'cupcake.jpg', 'Cái', NULL, '2019-11-20 02:42:01', '2019-11-20 02:42:01'),
(27, 'Bánh Muffins trứng', 1, '', 0.00, 80000, 'maxresdefault.jpg', 'Hộp', NULL, '2019-11-22 05:35:55', '2019-11-22 05:35:55'),
(28, 'Bánh Scone Peach Cake', 1, '', 0.00, 120000, 'Peach-Cake_3300.jpg', 'Hộp', NULL, '2019-11-22 05:41:40', '2019-11-22 05:41:40'),
(29, 'Bánh kem Mango Mouse', 4, '', 0.00, 300000, 'mango-mousse-cake.jpg', 'cái', NULL, '2019-11-22 05:43:36', '2019-11-22 05:43:36'),
(30, 'Bánh kem Matcha Mouse', 4, '', 0.00, 330000, 'MATCHA-MOUSSE.jpg', 'cái', NULL, '2019-11-22 05:46:19', '2019-11-22 05:46:19'),
(31, 'All Meaty Pizza', 6, '', 0.00, 140000, 'all1).jpg', 'cái', NULL, '2019-11-22 05:47:55', '2019-11-22 05:47:55'),
(32, 'Bánh su kem phô mai', 7, '', 0.00, 150000, '50020041-combo-20-banh-su-que-pho-mai-9.jpg', 'hộp', NULL, '2019-11-22 05:48:57', '2019-11-22 05:48:57'),
(33, 'Bánh kem Raspberry Delight', 4, '', 0.00, 330000, 'raspberry.jpg', 'cái', NULL, '2019-11-22 07:55:54', '2019-11-23 19:44:41'),
(34, 'Bánh kem Chocolate Fruit', 4, '', 0.00, 300000, 'chocolate-fruit636098975917921990.jpg', 'cái', NULL, '2019-11-23 18:15:29', '2019-11-23 18:15:29'),
(35, 'Bánh kem Caramen Pudding', 4, '', 0.00, 280000, 'Caramen-pudding636099031482099583.jpg', 'cái', NULL, '2019-11-23 18:16:56', '2019-11-23 18:16:56'),
(36, 'Bánh Sachertorte', 6, '', 0.00, 220000, '111.jpg', 'cái', NULL, '2019-11-23 18:18:15', '2019-11-23 18:18:15'),
(37, 'Bánh bông lan trứng muối II', 1, '', 0.00, 180000, 'banhbonglantrungmuoi.jpg', 'hộp', NULL, '2019-11-23 18:32:00', '2019-11-23 18:32:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_product`
--

CREATE TABLE `type_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_product`
--

INSERT INTO `type_product` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bánh mặn', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', NULL, NULL, NULL),
(2, 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween.', NULL, NULL, NULL),
(3, 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \\\"lạc\\\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', NULL, NULL, NULL),
(4, 'Bánh kem', 'Bánh kem thích hợp cho các buổi tiệc sinh nhật với mùi vị thơm ngon và hấp dẫn là một loại bánh không thể thiếu trong các buổi tiệc,liên hoan,đám cưới', NULL, NULL, NULL),
(5, 'Bánh crepe', 'Bánh crepe với lớp nhân hòa quyện với lớp bảnh bên ngoài tạo nên vị ngon vô cùng đặc sắc', NULL, NULL, NULL),
(6, 'Bánh Pizza', 'Bánh pizza với hương vị và chất liệu xuất xứ từ Ý chắc hẳng sẽ làm bạn chết mê với hương vị và độ ngon của nó,bánh không gây ngán cho người ăn và bạn sẽ cảm thấy ngon miệng khi thưởng thức bánh lúc nóng', NULL, NULL, NULL),
(7, 'Bánh su kem', 'Bánh su kem với lớp nhân kem mềm mịn và có hương vị nhè nhẹ không ngọt quá cũng không quá nhạt tạo cảm giác vừa ăn cho thực khách,chắc chắn nếu bạn ăn cái thứ nhất sẽ không thể bỏ qua cái thứ 2 bởi độ ngon của nó', NULL, NULL, NULL),
(8, 'Scone', 'Scone là một loại bánh mì nhanh – không trải qua công đoạn ủ và lên men tự nhiên – có kết cầu mềm hơn bánh mì ngọt. Bánh scone thường có hình tam giác hoặc nón – hay được ăn kèm với mứt trái cây', NULL, '2019-11-25 17:22:23', '2019-11-25 17:22:23'),
(9, 'Pancake', 'Bánh Pancake được làm chín bằng cách tráng một lớp dầu ăn mỏng hoặc quét một lớp bơ lên mặt chào, sau đó cho bột vào – tạo hình dẹt, tròn. Bánh được ăn kèm với mật ong – các loại trái cây tươi hoặc các loại mứt trái cây', NULL, '2019-11-26 00:25:49', '2019-11-25 18:07:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `role`, `deleted_at`, `created_at`, `updated_at`, `provider`, `provider_id`) VALUES
(1, 'Nguyễn Việt Hân', 'han_nguyen1999@gmail.com', '$2y$10$Hcny/7XbCh0PL2RYzFVvVuz0eoh6Fa9/14B2BgOV6dDXfNvkbaRw2', '0382484093', '129/15 đường 154,phường Tân Phú', 2, NULL, NULL, NULL, '', 0),
(2, 'Nguyễn Việt Anh', 'nguyen_anh1993@gmail.com', '$2y$10$pXH7M9WMXw/nGLjIjSDpFeF.P7DzENoG3B6CESXCgodGdRra/72CC', '0386888888', '129/15 đường 154,phường Tân Phú', 2, NULL, NULL, NULL, '', 0),
(3, 'Nguyễn Ngọc Hiền', 'xethong100@gmail.com', '$2y$10$.hBR.evsgBZI.HJ174MR1OijVVsxwrMvA380Ra6rWuDLxpAZfJ4x.', '0385858585', '53 đường 144,phường Tân Phú,Q9', 1, NULL, '2019-11-18 04:58:12', '2019-11-18 18:49:18', '', 0),
(4, 'Nguyễn Thị Thủy Tiên', 'tiendepgai@gmail.com', '$2y$10$FWvJI6MmZO6ZgYuRZdiEo.XUnp54BeMCtp3L0f8WM15/ReGoYJpyK', '0368333555', 'đường lò lu,phường trường thạnh', 1, NULL, '2019-11-18 09:34:45', '2019-11-18 09:34:45', '', 0),
(5, 'Nguyễn Thị Thái Nguyệt', 'xethong@gmail.com', '$2y$10$0ma6bpVD1qO2KYQyni.f3OaqlA1dmENcs2YwOF28qDo39dkTnqVQO', '0123456789', 'năm căn,cà mau', 1, NULL, '2019-11-19 05:09:11', '2019-11-24 21:09:37', '', 0),
(6, 'Nguyễn Hân', 'xethongs100@gmail.com', '$2y$10$ngG1y8VcWKDmawMi615fJe1Bn2HNNIw2/0DIIhQdNoInXwQm2zQcq', '0369999999', '129/15 đường 154 phường tân phú quận 9', 1, NULL, '2019-11-26 03:53:59', '2019-11-26 05:38:06', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
