-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 12:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btlweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `repassword` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `email` int(11) NOT NULL,
  `image_use` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'Đặc sản');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id_sp` int(11) NOT NULL,
  `name_sp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `price_km` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dcrip_quick` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL COMMENT 'New_crow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id_sp`, `name_sp`, `type`, `description`, `price`, `price_km`, `image`, `dcrip_quick`, `status`) VALUES
(1, 'Cà Phê Buôn Mê Thuộc', 'Đặc Sản', 'Đối với những người yêu thích cà phê, thưởng thức những ly cà phê nguyên chất chính là một thú vui tao nhã. Đặc biệt, hạt cà phê ở Buôn Ma Thuột không những làm cho du khách say mê mà còn lưu luyến mãi không quên. Hãy cùng SWIO tìm hiểu về các loại cà phê hấp dẫn ở Buôn Ma Thuột tại núi rừng Tây Nguyên.', 60000, 0, 'https://blog.swio.vn/wp-content/uploads/2023/02/image-cac-loai-ca-phe-hap-dan-o-buon-ma-thuot-164870453940001.jpg', 'Đối với những người yêu thích cà phê, thưởng thức những ly cà phê nguyên chất chính là một thú vui tao nhã. Đặc biệt, hạt cà phê ở Buôn Ma Thuột không những làm cho du khách say mê mà còn lưu luyến mãi không quên. Hãy cùng SWIO tìm hiểu về các loại cà phê hấp dẫn ở Buôn Ma Thuột tại núi rừng Tây Nguyên.', NULL),
(2, 'Tiêu Tiên Phước', 'Đặc sản', 'Tiêu Tiên Phước (100g) có rất nhiều công dụng khác nhau mang đến lợi ích cho sức khỏe. Trong Đông Y, hạt tiêu có tính nóng nên có khả năng làm ấm bụng cực kỳ tốt. Tiêu Tiên Phước (hay còn gọi là tiêu thơm) dùng để chỉ giống tiêu sẻ, lá nhỏ, hạt nhỏ vừa, phơi khô có màu đen với nhiều nếp nhăn được trồng bao đời nay tại Tiên Phước, Quảng Nam. Bà con nông dân đặt tên “tiêu nguồn” là để phân biệt với các giống tiêu ngoại nhập khác (tiêu hôi, tiêu bộp…). Tuy khó trồng, năng suất thấp nhưng chất lượng thì khó có loại tiêu nào sánh kịp: mùi thơm nồng, vị cay đậm đặc trưng.', 400000, 300000, 'https://hstatic.net/430/1000282430/upload/img/img-product-10001140.jpg', 'Tiêu Tiên Phước (100g) có rất nhiều công dụng khác nhau mang đến lợi ích cho sức khỏe. Trong Đông Y, hạt tiêu có tính nóng nên có khả năng làm ấm bụng cực kỳ tốt. Tiêu Tiên Phước (hay còn gọi là tiêu thơm) dùng để chỉ giống tiêu sẻ, lá nhỏ, hạt nhỏ vừa, phơi khô có màu đen với nhiều nếp nhăn được trồng bao đời nay tại Tiên Phước, Quảng Nam. Bà con nông dân đặt tên “tiêu nguồn” là để phân biệt với các giống tiêu ngoại nhập khác (tiêu hôi, tiêu bộp…). Tuy khó trồng, năng suất thấp nhưng chất lượng thì khó có loại tiêu nào sánh kịp: mùi thơm nồng, vị cay đậm đặc trưng.', NULL),
(3, 'Mật ong rừng', 'Đặc sản', 'Nông Sản Sạch Việt Nam canh tác rau, củ, quả hữu cơ Đà Lạt theo tiêu chí 6 không 7, sử dụng vi sinh vật bản địa ( nuôi cấy và phân lập) để lên men tất cả nguyên liệu hữu cơ để bón cho cây trồng.', 60000, 0, 'https://cdn.tgdd.vn/Files/2022/04/14/1425673/bang-gia-mat-ong-gia-mat-ong-rung-nguyen-chat-moi-nhat-2022-202204140806336267.jpg', 'Nông Sản Sạch Việt Nam canh tác rau, củ, quả hữu cơ Đà Lạt theo tiêu chí 6 không 7, sử dụng vi sinh vật bản địa ( nuôi cấy và phân lập) để lên men tất cả nguyên liệu hữu cơ để bón cho cây trồng.', NULL),
(4, 'Khoai mở', 'Đặc sản', 'Khoai mỡ thuộc họ Củ nâu với tên khoa học là Dioscorea alata. Trong đông y, khoai mỡ có tên là Mao thử. Tên gọi là cây khoai mỡ nhưng thực ra thân cây là dạng dây leo thân mềm.', 500000, 400000, 'https://cdn.tgdd.vn/Products/Images/8785/220460/bhx/khoai-mo-tui-1kg-1-2-cu-202205201525366907.jpg', 'Khoai mỡ thuộc họ Củ nâu với tên khoa học là Dioscorea alata. Trong đông y, khoai mỡ có tên là Mao thử. Tên gọi là cây khoai mỡ nhưng thực ra thân cây là dạng dây leo thân mềm.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
