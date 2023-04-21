-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2023 lúc 06:28 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nongsanstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_pasword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(2) NOT NULL,
  `name_danhmuc` varchar(50) NOT NULL,
  `uutien` tinyint(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `name_danhmuc`, `uutien`, `hienthi`) VALUES
(1, 'Đặc sản', 0, 1),
(2, 'Trái cây', 0, 1),
(3, 'Rau củ', 0, 1),
(4, 'Nấm các loại', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_new`
--

CREATE TABLE `tbl_new` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_new`
--

INSERT INTO `tbl_new` (`id`, `name`) VALUES
(1, 'Trồng trọt'),
(2, 'Hướng dẫn trồng rau'),
(3, 'Nhân Giống'),
(4, 'Chơi Cảnh'),
(5, 'Sâu Bệnh Hại Cây Trồng'),
(6, 'Phân Bón'),
(7, 'Sức khỏe và làm đẹp'),
(8, 'Món ăn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_chitiet` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_mota` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_gia` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_giakm` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakm`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_img`) VALUES
(1, 2, 'Strawberry', 'Soft, sweet, bright red berries. ', 'A strawberry is both a low-growing, flowering plant and also the name of the fruit that it produces. Strawberries are soft, sweet, bright red berries. They\'re also delicious. Strawberries have tiny edible seeds, which grow all over their surface.\r\n\r\n', '1000000', '800000', 0, 0, 1000, './asset/img/products/product-img-1.jpg'),
(2, 2, 'Apple', 'Sweet, another sour.', 'An apple is a round fruit with red or green skin and a whitish inside. One variety of apple might be sweet, another sour. The apple isn\'t just a fruit.', '100000', '', 0, 1, 1000, './asset/img/products/product-img-5.jpg'),
(3, 2, 'Grape', 'The pulp is juicy and sweet.', 'Grapes are fleshy, rounded fruits that grow in clusters made up of many fruits of greenish, yellowish or purple skin. The pulp is juicy and sweet, and it contain several seeds or pips. It is a well-known fruit; it is eaten raw, although it is mainly used for making wine.', '200000', '2000', 0, 0, 0, './asset/img/products/product-img-2.jpg'),
(4, 2, 'Kwiwi', 'Thekiwi fruit is a true berry. ', 'The ellipsoidal kiwi fruit is a true berry and has furry brownish green skin. The firm translucent green flesh has numerous edible purple-black seeds embedded around a white centre. The deciduous leaves are borne alternately on long petioles (leaf stems), and young leaves are covered with reddish hairs.', '500000', '200000', 0, 1, 0, './asset/img/products/product-img-4.jpg'),
(5, 2, 'Vải', 'Giàu Vitamin cùng các dưỡng chất rất tốt cho sức khỏe, làn da của bạn.', 'Vải cùng họ với chôm chôm và nhãn, có nguồn gốc từ miền nam Trung Quốc.  Là loại trái cây phổ biến được yêu thích mỗi khi hè đến, vải giàu Vitamin cùng các dưỡng chất nên rất tốt cho sức khỏe cũng như làn da của bạn.', '100000', '80000', 0, 0, 0, './asset/img/products/product-img-6.jpg'),
(6, 2, 'Cam', 'Cam là loại quả giàu chất chống oxy hóa và chất phytochemical. ', 'Cam là loại quả giàu chất chống oxy hóa và chất phytochemical. Theo các nhà khoa học Anh: “Bình quân trong một trái cam có chứa khoảng 170 mg phytochemicals bao gồm các chất dưỡng da và chống lão hóa”. Chuyên gia dinh dưỡng Monique dos Santos cho biết cam được yêu thích và có lợi cho người khỏe mạnh cũng như các bệnh nhân. Chính vì vậy các công dụng của quả cam có thể kể đến như: giúp giải nhiệt, thỏa mãn cơn khát cho người có cường độ vân động cao, tăng cường hệ tiêu hóa và hệ miễn dịch của cơ thể.', '150000', '10000', 0, 0, 0, './asset/img/products/product-img-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham_display`
--

CREATE TABLE `tbl_sanpham_display` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_chitiet` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_mota` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_gia` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_giakm` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham_display`
--

INSERT INTO `tbl_sanpham_display` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakm`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_img`) VALUES
(1, 2, 'Strawberry', 'Soft, sweet, bright red berries. ', 'A strawberry is both a low-growing, flowering plant and also the name of the fruit that it produces. Strawberries are soft, sweet, bright red berries. They\'re also delicious. Strawberries have tiny edible seeds, which grow all over their surface.\r\n\r\n', '1000000', '800000', 0, 0, 1000, './asset/img/products/product-img-1.jpg'),
(2, 2, 'Apple', 'Sweet, another sour.', 'An apple is a round fruit with red or green skin and a whitish inside. One variety of apple might be sweet, another sour. The apple isn\'t just a fruit.', '100000', '', 0, 1, 1000, './asset/img/products/product-img-5.jpg'),
(3, 2, 'Grape', 'The pulp is juicy and sweet.', 'Grapes are fleshy, rounded fruits that grow in clusters made up of many fruits of greenish, yellowish or purple skin. The pulp is juicy and sweet, and it contain several seeds or pips. It is a well-known fruit; it is eaten raw, although it is mainly used for making wine.', '200000', '2000', 0, 0, 0, './asset/img/products/product-img-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text NOT NULL,
  `password_re` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `phone` text DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `password`, `password_re`, `address`, `email`, `role`, `phone`, `img`) VALUES
(6, 'Huynh Le', 'huynhle123', '$2y$10$m00/wQw5RhM8ok2CfuirOugB25Q7QmrHsTSS1ThFjw.B8iCdJ07Wm', '$2y$10$m00/wQw5RhM8ok2CfuirOugB25Q7QmrHsTSS1ThFjw.B8iCdJ07Wm', 'SG', 'huynhle123@gmail.com', 1, '09971237123', '/SourceCode_Implement/asset/img/user/huynhle123/thumb.jpg'),
(8, NULL, 'admin2', '123', '123', 'SG', 'admin@gmail.com', 1, '123123', NULL),
(9, 'huynh lezz', 'huynhle1234', '$2y$10$ZKAXwpMlHTckdfWijqZlLOpCLB9erDqkMVp9xQ0KDnoiEkmao1/66', '$2y$10$ZKAXwpMlHTckdfWijqZlLOpCLB9erDqkMVp9xQ0KDnoiEkmao1/66', 'SG', 'huynhle1234@gmail.com', 0, '12312312', '/SourceCode_Implement/asset/img/user/huynhle1234/logo.png'),
(10, 'huynh lezz', 'huynhle1234', '$2y$10$X6BhmuG3iR74MQf7OQNlyeG6AlQ8Whsjcq.9jADwRAzVQvFJ3/Zca', '$2y$10$X6BhmuG3iR74MQf7OQNlyeG6AlQ8Whsjcq.9jADwRAzVQvFJ3/Zca', 'SG', 'huynhle1234@gmail.com', 0, '12312312', '/SourceCode_Implement/asset/img/user/huynhle1234/logo.png'),
(11, 'Huynh lee', 'huynhle12345', '$2y$10$ijM047cZDFPBQuu/tC.wO.t3O6HZ1dWKzI8b.QPTihHj0KJ0DudyK', '$2y$10$ijM047cZDFPBQuu/tC.wO.t3O6HZ1dWKzI8b.QPTihHj0KJ0DudyK', 'SG', 'huynhle1@gmail.com', 0, '123123', '/SourceCode_Implement/asset/img/user/huynhle12345/thumb.jpg'),
(12, 'Huynh lee', 'huynhle12345', '$2y$10$rCcSKAEy4wRlg3Ey.Q/uXOw9C5H6JRY7cc4y2oTuhxbxbo/.FptLS', '$2y$10$rCcSKAEy4wRlg3Ey.Q/uXOw9C5H6JRY7cc4y2oTuhxbxbo/.FptLS', 'SG', 'huynhle1@gmail.com', 0, '123123', '/SourceCode_Implement/asset/img/user/huynhle12345/thumb.jpg'),
(13, 'Hoang Tri', 'hoangtri123', '$2y$10$UgxRqLaKYEJtxZY1bn9yP.yrs2JNMkql8syH73IBGEMNPbWFR4rvO', '$2y$10$UgxRqLaKYEJtxZY1bn9yP.yrs2JNMkql8syH73IBGEMNPbWFR4rvO', 'Đinh Trường Sanh', 'hoangminhtri2002zz@gmail.com', 0, '0913840652', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_new`
--
ALTER TABLE `tbl_new`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `fk_sanpham_danhmuc` (`category_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_new`
--
ALTER TABLE `tbl_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
