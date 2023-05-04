-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2023 lúc 03:41 PM
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
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sp` int(5) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `positeble` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id`, `name`, `id_user`, `id_sp`, `noidung`, `positeble`) VALUES
(1, 'Chú bé đần', 0, 2, 'Rất ngon, bổ ích, thú vị', ''),
(3, 'Trời không xanh', 0, 1, 'Yêu shop lắm nha, nhưng mà hơi dỗi vì giao hàng chậm', '');

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
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(39) NOT NULL,
  `phone` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_free` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `subject`, `address`, `date_free`, `message`) VALUES
(1, 'Điện thoại Iphone', 'hoangminhtri2002zz@gmail.com', '0913840652', 'Môn tự chọn tự do', 'Đinh Trường Sanh', '2023-04-28 12:00', 'Đù đọt'),
(8, 'Nguyễn Hoàng Minh Trí', 'hoangminhtri2002zz@gmail.com', '0913840652', 'Hỏi đáp 1', '30 D2, Đinh Trường Sanh', '2023-04-26 12:00', 'Demo');

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
(4, 'Nấm các loại', 0, 1),
(9, 'Trái cây lên men', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhangkh`
--

CREATE TABLE `tbl_donhangkh` (
  `id_don` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `name_kh` varchar(100) NOT NULL,
  `sanpham_name` varchar(100) NOT NULL,
  `price_sp` varchar(100) NOT NULL,
  `quantify` varchar(100) DEFAULT NULL,
  `total` varchar(20) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `address_in` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhangkh`
--

INSERT INTO `tbl_donhangkh` (`id_don`, `name_user`, `name_kh`, `sanpham_name`, `price_sp`, `quantify`, `total`, `datetime_in`, `address_in`) VALUES
(55, 'achamchi', 'Khách hàng Trí', '', '', '', '', '2023-04-28 03:42:36', 'Miền Tây'),
(56, 'achamchi', '', 'Apple', '100000', '2', '200000', '2023-04-28 03:42:36', 'Miền Tây'),
(57, 'achamchi', '--------------', 'Tổng đơn hàng', '---', '---', '210000', '2023-04-28 03:42:36', 'Miền Tây'),
(58, 'bsiengnang', 'Khách hàng Trí', '', '', '', '', '2023-04-28 06:09:29', 'Bách khoa'),
(59, 'bsiengnang', '', 'Apple', '100000', '1', '100000', '2023-04-28 06:09:29', 'Bách khoa'),
(60, 'bsiengnang', '', 'Grape', '2000', '1', '2000', '2023-04-28 06:09:29', 'Bách khoa'),
(61, 'bsiengnang', '--------------', 'Tổng đơn hàng', '---', '---', '107100', '2023-04-28 06:09:29', 'Bách khoa');

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
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `detail`, `img`) VALUES
(1, 'Thủy canh tĩnh và động là gì? Giới thiệu kỹ thuật trồng thủy canh ', ' Thủy canh tĩnh và động được xem là 2 phương pháp thủy canh đang được sử dụng nhiều nhất hiện nay. Mỗi một phương pháp sẽ mang đến những ưu nhược điểm khác nhau và có kỹ thuật trồng khác nhau. Chính vì thế hãy cùng chúng tôi tìm hiểu ngay về 2 phương pháp...', './asset/img/posts/post1_new.jpg'),
(6, 'Mẹo chọn hạt giống Việt chất lượng cao, giá rẻ - updateee', 'Hạt giống là yếu tố đầu tiên vô cùng quan trọng, quyết định sự sinh trưởng của cây trồng. Để chọn lựa được sản phẩm hạt giống chất lượng cao mà giá cả phải chăng sẽ giúp bạn dễ dàng có một vườn rau xanh ngay tại nhà. Hạt giống Việt tại My Garden là...', './asset/img/posts/post2_new.jpg'),
(7, 'Cách nhân giống Lan Trầm Tím và kỹ thuật ươm ki “hiệu quả” ', 'Lan Trầm Tím là một loại hoa được nhiều người yêu thích bởi màu tím hay màu trắng kết hợp với mùi hương dễ chịu tạo nên một không gian mộng mơ làm mê hoặc lòng người. Và cách nhân giống lan trầm cũng không hề khó.', './asset/img/posts/post3_new.jpg'),
(9, 'Cách giâm cành hoa nhài hiệu quả cho cây khỏe mạnh - fit', 'Cách giâm cành hoa nhài là phương pháp hữu hiệu nhất để nhân giống hoa nhài, với những ưu điểm vượt trội so với những phương pháp khác như có chất lượng cao, dễ dàng thực hiện, tốn ít thời gian,… khiến cho mọi người đều áp dụng kỹ thuật này. Ngoài việc trồng với...', './asset/img/posts/post4_new.jpg');

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
  `sanpham_gia` int(5) NOT NULL DEFAULT 0,
  `sanpham_giakm` int(10) NOT NULL DEFAULT 0,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL DEFAULT 1000,
  `sanpham_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakm`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_img`) VALUES
(1, 2, 'Dau Tay', 'Soft, sweet, bright red berries. ', 'A strawberry is both a low-growing, flowering plant and also the name of the fruit that it produces. Strawberries are soft, sweet, bright red berries. They\'re also delicious. Strawberries have tiny edible seeds, which grow all over their surface.', 10000, 800000, 0, 0, 0, './asset/img/products/product-img-1.jpg'),
(2, 2, 'Apple', 'Sweet, another sour.', 'An apple is a round fruit with red or green skin and a whitish inside. One variety of apple might be sweet, another sour. The apple isn\'t just a fruit.', 100000, 0, 0, 1, 959, './asset/img/products/product-img-5.jpg'),
(3, 2, 'Grape', 'The pulp is juicy and sweet.', 'Grapes are fleshy, rounded fruits that grow in clusters made up of many fruits of greenish, yellowish or purple skin. The pulp is juicy and sweet, and it contain several seeds or pips. It is a well-known fruit; it is eaten raw, although it is mainly used for making wine.', 200000, 2000, 0, 0, 981, './asset/img/products/product-img-2.jpg'),
(4, 2, 'Kwiwi', 'Thekiwi fruit is a true berry. ', 'The ellipsoidal kiwi fruit is a true berry and has furry brownish green skin. The firm translucent green flesh has numerous edible purple-black seeds embedded around a white centre. The deciduous leaves are borne alternately on long petioles (leaf stems), and young leaves are covered with reddish hairs.', 500000, 200000, 0, 1, 990, './asset/img/products/product-img-4.jpg'),
(5, 2, 'Vải', 'Giàu Vitamin cùng các dưỡng chất rất tốt cho sức khỏe, làn da của bạn.', 'Vải cùng họ với chôm chôm và nhãn, có nguồn gốc từ miền nam Trung Quốc.  Là loại trái cây phổ biến được yêu thích mỗi khi hè đến, vải giàu Vitamin cùng các dưỡng chất nên rất tốt cho sức khỏe cũng như làn da của bạn.', 100000, 80000, 0, 0, 993, './asset/img/products/product-img-6.jpg'),
(6, 2, 'Cam', 'Cam là loại quả giàu chất chống oxy hóa và chất phytochemical. ', 'Cam là loại quả giàu chất chống oxy hóa và chất phytochemical. Theo các nhà khoa học Anh: “Bình quân trong một trái cam có chứa khoảng 170 mg phytochemicals bao gồm các chất dưỡng da và chống lão hóa”. Chuyên gia dinh dưỡng Monique dos Santos cho biết cam được yêu thích và có lợi cho người khỏe mạnh cũng như các bệnh nhân. Chính vì vậy các công dụng của quả cam có thể kể đến như: giúp giải nhiệt, thỏa mãn cơn khát cho người có cường độ vân động cao, tăng cường hệ tiêu hóa và hệ miễn dịch của cơ thể.', 150000, 10000, 0, 0, 993, './asset/img/products/product-img-3.jpg'),
(7, 1, 'Mật ong', 'Một loại thực phẩm ngon miệng', 'Mật ong không chỉ là một loại thực phẩm ngon miệng mà còn có nhiều lợi ích đáng ngạc nhiên cho sức khỏe con người. Nếu bạn đang tìm kiếm một phương pháp đơn giản để cải thiện sức khỏe cũng như làm đẹp, thì tiêu thụ mật ong hàng ngày là một lựa chọn tuyệt vời. Bài viết này sẽ cung cấp cho bạn thông tin chi tiết về 19 tác dụng của mật ong và cách sử dụng mật ong đúng cách để có thể giúp bạn phát huy hết các công dụng thần kỳ của mật ong. ', 1000000, 0, 0, 0, 999, './asset/img/products/product-img-7.jpg'),
(8, 1, 'Khoai mở', 'Khoai mỡ, hay khoai tím,', 'Khoai mỡ, hay khoai tím, (danh pháp hai phần: Dioscorea alata ) là một loài thuộc chi Củ nâu Dioscorea. Đây là loại dây leo cho củ được trồng nhiều ở Ấn Độ, Malaysia, Châu Phi. Đây là loại khoai được trồng làm cây lương thực rất lâu đời. Một số loài khác của Dioscorea cũng được con người trồng, hoặc khai thác từ cây dại để sử dụng như một loại lương thực như: D. esculenta Burk. (khoai từ), D. hispida Dennt. (củ nần), D. pierrel Prain. (củ từ nước), D. bulbifera Linn. (khoai dai).\r\n\r\nTrên thế giới, khoai mỡ được xem là một trong những loại cây lương thực quan trọng. Khoai mỡ có thể dùng trong nhiều món ăn quen thuộc như luộc, chiên, hay nấu canh,[3] hấp bánh và mang lại khá nhiều lợi ích cho sức khỏe. Theo Bộ Nông nghiệp Hoa Kỳ, khoai mỡ là một nguồn dồi dào kali, giúp duy trì huyết áp ổn định. Trên thế giới, cây khoai mỡ được trồng ở 3 vùng chính: Tây Phi, khu vực biển Thái Bình Dương (kể cả Nhật Bản) và các nước trong vùng biển Caribê. Tại Việt Nam, khoai mỡ cũng được trồng làm cây lương thực ở khá nhiều nơi trong đó có tỉnh Long An, là một trong những nơi có diện tích khoai mỡ lớn và tập trung nhất. Khoai mỡ là loại dây leo, thân mềm, có sức sống tốt.[4]', 10000, 50000, 0, 0, 1000, './asset/img/products/product-img-8.jpg'),
(9, 1, 'Tiêu sọ', 'Sản phẩm chất lượng', 'Tiêu là quả của cây hồ tiêu, một loại cây dây leo với thân dài, lá bóng tương tự lá trầu không nhưng dài hơn. Tiêu cho quả từng chùm, còn sống có màu xanh, khi chín màu đỏ, vàng... sau khi thu hoạch và phơi khô có màu đen, da nhăn. Tiêu được sơ chế với 2 dạng tiêu đen (chỉ phơi khô) và tiêu sọ (tiêu sọ, tiêu được phơi khô và loại bỏ lớp vỏ màu đen)', 300000, 250000, 0, 0, 1000, './asset/img/products/product-img-9.jpg'),
(10, 3, 'Cải xoang', 'Cải rất tốt', 'Cải xoong còn có tên gọi khác là cải xà lách xoong, xà lách xoong (danh pháp hai phần: Nasturtium officinale hoặc Nasturtium microphyllum) là một loại thực vật thủy sinh hay bán thủy sinh, sống lâu năm và lớn nhanh, có nguồn gốc từ châu Âu tới Trung Á và là một trong số những loại rau ăn được con người dùng từ rất lâu.', 50000, 25000, 0, 0, 1000, './asset/img/products/product-img-14.jpg'),
(11, 3, 'Tía tô', 'Cây thảo thuộc họ hoa môi', 'Tía tô (danh pháp hai phần: Perilla frutescens var. crispa, đồng nghĩa: Perilla macrostachya, Perilla ocymoides, Perilla urticifolia, Ocimum frutescens) là một trong số khoảng 8 loài cây tía tô thuộc họ Hoa môi (Lamiaceae hay Labiatae) giống như húng.[2] Loài tía tô bản địa mọc trải rộng từ Ấn Độ sang Đông Á gồm Việt Nam.', 5000, 0, 0, 0, 1000, './asset/img/products/product-img-10.jpg'),
(12, 3, 'Cải trời', 'Món quà của mẹ thiên nhiên', 'Trong dân gian, cây cải trời còn được gọi là cải ma, kinh đầu tuyến hay cỏ côi,... và nhiều tên gọi khác nữa. Thân cây thường mọc thẳng với chiều cao từ 30 đến 59cm. Lá đơn, có nhiều răng cưa, phần mặt dưới của lá có nhiều lông. Trung bình mỗi chiếc lá cải trời có chiều rộng khoảng 4cm. Hoa có màu vàng và quả có hình trám, dáng thuôn dài. Khi thu hoạch cải trời, cần nhổ luôn cả cây. Thường được thu hoạch vào mùa xuân, hè. Sau khi nhổ cây cải trời, cần rửa sạch, chặt nhỏ và mang phơi khô.  ', 50000, 0, 0, 0, 1000, './asset/img/products/product-img-11.jpg'),
(13, 4, 'Nấm lớn', 'Một sản phẩm tuyệt vời', 'Nấm hương có dạng như cái ô, đường kính 4–10 cm, màu nâu nhạt, khi chín chuyển thành nâu sậm. Nấm hương có một chân đính vào giữa tai nấm. Mặt trên tai nấm màu nâu, mặt dưới có nhiều bản mỏng xếp lại.Trên mặt nấm có những vảy nhỏ màu trắng. Thịt nấm màu trắng, cuống hình trụ. Nấm mọc ký sinh trên những cây có lá to và thay lá mỗi mùa như dẻ, sồi, phong. Loài nấm này mọc hoang nhiều ở Việt Nam, Trung Quốc, Nhật Bản, Hàn Quốc. Ở Mỹ, nông dân trồng nấm hương tại các trang trại. Mỗi khúc gỗ có thể cho nấm ký sinh 3-7 năm.', 50000, 0, 0, 0, 998, './asset/img/products/product-img-13.jpg'),
(14, 4, 'Nấm hương', 'Ngon lắm nha', 'Nấm hương có dạng như cái ô, đường kính 4–10 cm, màu nâu nhạt, khi chín chuyển thành nâu sậm. Nấm hương có một chân đính vào giữa tai nấm. Mặt trên tai nấm màu nâu, mặt dưới có nhiều bản mỏng xếp lại.Trên mặt nấm có những vảy nhỏ màu trắng. Thịt nấm màu trắng, cuống hình trụ. Nấm mọc ký sinh trên những cây có lá to và thay lá mỗi mùa như dẻ, sồi, phong. Loài nấm này mọc hoang nhiều ở Việt Nam, Trung Quốc, Nhật Bản, Hàn Quốc. Ở Mỹ, nông dân trồng nấm hương tại các trang trại. Mỗi khúc gỗ có thể cho nấm ký sinh 3-7 năm.', 100000, 0, 0, 0, 1000, './asset/img/products/product-img-13.jpg'),
(15, 4, 'Nấm loại 1', 'Ngon lắm nha', 'Nấm hương có dạng như cái ô, đường kính 4–10 cm, màu nâu nhạt, khi chín chuyển thành nâu sậm. Nấm hương có một chân đính vào giữa tai nấm. Mặt trên tai nấm màu nâu, mặt dưới có nhiều bản mỏng xếp lại.Trên mặt nấm có những vảy nhỏ màu trắng. Thịt nấm màu trắng, cuống hình trụ. Nấm mọc ký sinh trên những cây có lá to và thay lá mỗi mùa như dẻ, sồi, phong. Loài nấm này mọc hoang nhiều ở Việt Nam, Trung Quốc, Nhật Bản, Hàn Quốc. Ở Mỹ, nông dân trồng nấm hương tại các trang trại. Mỗi khúc gỗ có thể cho nấm ký sinh 3-7 năm.', 100000, 0, 0, 0, 1000, './asset/img/products/product-img-13.jpg');

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
-- Cấu trúc bảng cho bảng `tbl_taodon`
--

CREATE TABLE `tbl_taodon` (
  `id_spdon` int(11) NOT NULL,
  `sanpham_img` varchar(100) NOT NULL,
  `name_sp` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantifiy` varchar(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tddonhang`
--

CREATE TABLE `tbl_tddonhang` (
  `id_donhang` int(11) NOT NULL,
  `name_cus` varchar(1000) NOT NULL,
  `date_dh` datetime DEFAULT NULL,
  `total` int(11) NOT NULL,
  `address_in` varchar(1000) NOT NULL,
  `pprice` varchar(5) NOT NULL,
  `phone_in` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tddonhang`
--

INSERT INTO `tbl_tddonhang` (`id_donhang`, `name_cus`, `date_dh`, `total`, `address_in`, `pprice`, `phone_in`) VALUES
(1, 'nguyễn đoàn anh kiệt', '2023-04-26 19:24:46', 1333800, 'KTX khu A', 'Bank', '0989771684'),
(2, 'DANG Nam Thiện Nhân', '2023-04-27 01:31:42', 342000, 'KTX khu A', 'Bank', '0989771684'),
(3, 'DANG Nam Thiện Nhân', '2023-04-27 01:34:40', 570000, 'KTX khu A', 'Bank', '0989771684'),
(4, 'nguyễn đoàn anh kiệt', '2023-04-27 01:42:45', 1539000, 'KTX khu A', 'Bank', '0989771684'),
(18, 'Khách hàng Trí', '2023-04-28 03:42:36', 210000, 'Miền Tây', 'COD', '0913840652'),
(19, 'Khách hàng Trí', '2023-04-28 06:09:29', 107100, 'Bách khoa', 'Bank', '0913840652');

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
  `img` text DEFAULT './asset/img/products/product-img-14.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `password`, `password_re`, `address`, `email`, `role`, `phone`, `img`) VALUES
(1, 'Le Huynh', 'huynhlegroup2', '$2y$10$ZytLo6swzVVLIh1JvTUI/eP1E8s54IyDSn7BHGe.k/SkofEZthXX2', '$2y$10$ZytLo6swzVVLIh1JvTUI/eP1E8s54IyDSn7BHGe.k/SkofEZthXX2', 'Thành phố Hồ Chí Minh', 'huynhle123@gmail.com', 1, '099712371', './asset/img/user/huynhlegroup2/about_avt3.jpg'),
(2, 'Tri Nguyen Hoang Minh', 'tringuyengroup2', '$2y$10$y7sdnZ1pzQfsFLhXjOWF7OfVf9R7MtRmR0xHNmxBjg6sOwi4u4zqO', '$2y$10$y7sdnZ1pzQfsFLhXjOWF7OfVf9R7MtRmR0xHNmxBjg6sOwi4u4zqO', 'Long Xuyên An Giang', 'bangbang2002zingmepoki@gmail.com', 1, '0989771682', './asset/img/user/tringuyengroup2/about_avt1.jpg'),
(3, 'Nhan Dang Nam Thien', 'nhandanggroup2', '$2y$10$wh/OJexMl6PshTHv8VLs7etcR6oqDBUWGWr4xkDSCIlOvgohDJ9qa', '$2y$10$wh/OJexMl6PshTHv8VLs7etcR6oqDBUWGWr4xkDSCIlOvgohDJ9qa', 'Tháp Mười Đồng Tháp', 'nhan.dangktmtrc134@gmail.com', 1, '0989771684', './asset/img/user/nhandanggroup2/about_avt2.jpg'),
(4, 'A Nguyen Van A', 'achamchi', '$2y$10$NRG8uTLdLQsBxsdW1RX.qO7PCZ7NdhAKx6J3PQkx.Hbp/N3kIWbsC', '$2y$10$NRG8uTLdLQsBxsdW1RX.qO7PCZ7NdhAKx6J3PQkx.Hbp/N3kIWbsC', 'Thanh Hóa ', 'nguyenvana@gmail.com', 0, '0989767541', ''),
(5, 'B Ho Thi A', 'bsiengnang', '$2y$10$1Eqw9dMRNBk6ROLy4bTZnOPwSpzBjy2XTzo22o3YtwV7vSnj5Z1g6', '$2y$10$1Eqw9dMRNBk6ROLy4bTZnOPwSpzBjy2XTzo22o3YtwV7vSnj5Z1g6', 'Quảng trị', 'bhothi@gmail.com', 0, '089718662', './asset/img/user/bsiengnang/avt5.jpg'),
(6, 'Huynh Le', 'huynhle123', '$2y$10$m00/wQw5RhM8ok2CfuirOugB25Q7QmrHsTSS1ThFjw.B8iCdJ07Wm', '$2y$10$m00/wQw5RhM8ok2CfuirOugB25Q7QmrHsTSS1ThFjw.B8iCdJ07Wm', 'SG', 'huynhle123@gmail.com', 1, '09971237123', './asset/img/user/huynhle123/thumb.jpg'),
(7, 'C Tran Van', 'cchicancu', '$2y$10$LmSNGuxSbUsd4G6VAqlzs.fw7hg0v9Mor/6AbKBx0kGriXKz0/BU6', '$2y$10$LmSNGuxSbUsd4G6VAqlzs.fw7hg0v9Mor/6AbKBx0kGriXKz0/BU6', 'Tiền Giang', 'ccancu@gmail.com', 0, '089665771', '/SourceCode_Implement/asset/img/user/cchicancu/avatar-cute-2.jpg'),
(9, 'huynh lezz', 'huynhle1234', '$2y$10$ZKAXwpMlHTckdfWijqZlLOpCLB9erDqkMVp9xQ0KDnoiEkmao1/66', '$2y$10$ZKAXwpMlHTckdfWijqZlLOpCLB9erDqkMVp9xQ0KDnoiEkmao1/66', 'SG', 'huynhle1234@gmail.com', 0, '12312312', '/SourceCode_Implement/asset/img/user/huynhle1234/logo.png'),
(10, 'huynh lezz', 'huynhle1234', '$2y$10$X6BhmuG3iR74MQf7OQNlyeG6AlQ8Whsjcq.9jADwRAzVQvFJ3/Zca', '$2y$10$X6BhmuG3iR74MQf7OQNlyeG6AlQ8Whsjcq.9jADwRAzVQvFJ3/Zca', 'SG', 'huynhle1234@gmail.com', 0, '12312312', '/SourceCode_Implement/asset/img/user/huynhle1234/logo.png'),
(11, 'Huynh lee', 'huynhle12345', '$2y$10$ijM047cZDFPBQuu/tC.wO.t3O6HZ1dWKzI8b.QPTihHj0KJ0DudyK', '$2y$10$ijM047cZDFPBQuu/tC.wO.t3O6HZ1dWKzI8b.QPTihHj0KJ0DudyK', 'SG', 'huynhle1@gmail.com', 0, '123123', '/SourceCode_Implement/asset/img/user/huynhle12345/thumb.jpg'),
(12, 'Huynh lee', 'huynhle12345', '$2y$10$rCcSKAEy4wRlg3Ey.Q/uXOw9C5H6JRY7cc4y2oTuhxbxbo/.FptLS', '$2y$10$rCcSKAEy4wRlg3Ey.Q/uXOw9C5H6JRY7cc4y2oTuhxbxbo/.FptLS', 'SG', 'huynhle1@gmail.com', 0, '123123', '/SourceCode_Implement/asset/img/user/huynhle12345/thumb.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_donhangkh`
--
ALTER TABLE `tbl_donhangkh`
  ADD PRIMARY KEY (`id_don`);

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
-- Chỉ mục cho bảng `tbl_taodon`
--
ALTER TABLE `tbl_taodon`
  ADD PRIMARY KEY (`id_spdon`);

--
-- Chỉ mục cho bảng `tbl_tddonhang`
--
ALTER TABLE `tbl_tddonhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_donhangkh`
--
ALTER TABLE `tbl_donhangkh`
  MODIFY `id_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_new`
--
ALTER TABLE `tbl_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_taodon`
--
ALTER TABLE `tbl_taodon`
  MODIFY `id_spdon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_tddonhang`
--
ALTER TABLE `tbl_tddonhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
