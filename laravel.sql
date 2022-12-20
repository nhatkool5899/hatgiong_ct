-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuahang`
--

CREATE TABLE `cuahang` (
  `id_cuahang` bigint(20) UNSIGNED NOT NULL,
  `tencuahang` text NOT NULL,
  `diachi` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id_daily` bigint(20) UNSIGNED NOT NULL,
  `hovaten` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kythuat`
--

CREATE TABLE `kythuat` (
  `id_kythuat` bigint(20) UNSIGNED NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kythuat`
--

INSERT INTO `kythuat` (`id_kythuat`, `tieude`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 'Kỹ thuật nuôi trồng, chăm sóc và thu hái nấm bào ngư hiệu quả', '<p>Nấm b&agrave;o ngư l&agrave; loại thức ăn ngon, l&agrave; thực phẩm c&oacute; gi&aacute; trị dinh dưỡng kh&aacute; cao, cung cấp một lượng đ&aacute;ng kể chất đạm, đường bột, nhiều vitamin v&agrave; kho&aacute;ng chất, đồng thời l&agrave; dược liệu qu&yacute; gi&aacute; trong việc duy tr&igrave;, bảo vệ sức khỏe ph&ograve;ng chống nhiều bệnh kể cả ung thư, ung bướu v&agrave; cũng l&agrave; nguồn h&agrave;ng xuất khẩu c&oacute; gi&aacute; trị. Hơn nữa l&agrave; một trong những loại nấm dễ trồng, thời gian thu hoạch nhanh,...Ch&iacute;nh v&igrave; vậy trong b&agrave;i viết n&agrave;y ch&uacute;ng t&ocirc;i xin hướng dẫn b&agrave; con c&aacute;c kỹ thuật trồng, chăm s&oacute;c nấm v&agrave; thu h&aacute;i nấm b&agrave;o ngư như sau:</p>\r\n\r\n<p><a href=\"http://camnangcaytrong.com/Uploads/UserFiles/images/nam%20bao%20ngu%20chuan.jpg\"><img alt=\"nấm bào ngư\" src=\"http://camnangcaytrong.com/Uploads/UserFiles/images/nam%20bao%20ngu%20chuan.jpg\" /></a></p>\r\n\r\n<h2>1. Chuẩn bị nguy&ecirc;n liệu nu&ocirc;i trồng nấm b&agrave;o ngư</h2>\r\n\r\n<p>- Nguy&ecirc;n liệu ch&iacute;nh l&agrave;m m&ocirc;i trường nu&ocirc;i trồng nấm b&agrave;o ngư l&agrave; c&aacute;c loại phế thải n&ocirc;ng nghiệp gi&agrave;u chất cenluloz như: rơm rạ v&agrave; m&ugrave;n cưa thuộc loại gỗ mềm v&agrave; kh&ocirc;ng c&oacute; nhựa ngăn meo nấm ph&aacute;t triển như gỗ cao su, xo&agrave;i, so đũa, th&acirc;n bắp, c&ugrave;i bắp&hellip;..</p>\r\n\r\n<p>- Nguy&ecirc;n liệu sau khi qua xử l&yacute;, ủ ch&iacute;n, phối trộn chất dinh dưỡng, v&ocirc; bịch, hấp tiệt tr&ugrave;ng, cấy meo giống. Sau 20 &ndash; 25 ng&agrave;y tơ nấm mọc đầy bịch ph&ocirc;i, l&uacute;c n&agrave;y bịch ph&ocirc;i được đem ra nh&agrave; nấm chăm s&oacute;c thu hoạch quả thể.</p>\r\n\r\n<h2>2. Chuẩn bị nh&agrave; nu&ocirc;i trồng nấm b&agrave;o ngư</h2>\r\n\r\n<p>- Y&ecirc;u cầu về vật liệu l&agrave;m nh&agrave; nu&ocirc;i trồng nấm b&agrave;o ngư: l&agrave;m nh&agrave; nấm b&agrave;o ngư bằng tre, l&aacute;, lưới, ny lon. C&oacute; thể tận dụng s&agrave;n nh&agrave; để treo bịch ph&ocirc;i nấm, xung quanh nh&agrave; trồng nấm c&oacute; thể bao lưới cước hoặc nylon để giữ ẩm độ, hạn chế c&ocirc;n tr&ugrave;ng gi&uacute;p cho nấm ph&aacute;t triển tốt.</p>\r\n\r\n<p>- Y&ecirc;u cầu nh&agrave; để nu&ocirc;i trồng nấm b&agrave;o ngư: phải sạch sẽ, cao r&aacute;o, tho&aacute;ng kh&iacute;, tho&aacute;t nước v&agrave; giữ được độ ẩm. C&aacute;c bịch ph&ocirc;i nấm c&oacute; thể xếp đặt tr&ecirc;n c&aacute;c bệ (bằng tre hay sắt) hoặc treo dưới c&aacute;c thanh ngang, mỗi h&agrave;ng c&aacute;ch nhau 20 &ndash; 30cm, mỗi d&acirc;y c&aacute;ch nhau 20 &ndash; 25cm, mỗi d&acirc;y c&oacute; thể treo từ 6 &ndash; 10 bịch ph&ocirc;i. Tốt nhất bố tr&iacute; d&agrave;n treo theo từng khối một, mỗi khối rộng từ 1,4 - 1,6m, chiều d&agrave;i t&ugrave;y theo nh&agrave; trồng. Mỗi khối chừa c&aacute;c lối đi để tiện chăm s&oacute;c v&agrave; thu h&aacute;i.</p>\r\n\r\n<p>- Trước khi đưa nấm v&agrave;o nh&agrave; nu&ocirc;i trồng ta cần khử tr&ugrave;ng nh&agrave; nấm bằng v&ocirc;i bột cứ 100gr v&ocirc;i bột/1m2 r&atilde;i đều xung quanh nền nh&agrave; nu&ocirc;i trồng nấm b&agrave;o ngư.</p>\r\n\r\n<p>- Sau khi nh&agrave; nấm chuẩn bị xong ta tiến h&agrave;nh đưa bịch ph&ocirc;i nấm v&agrave;o chăm s&oacute;c.</p>\r\n\r\n<h2>3. Đưa bịch ph&ocirc;i nấm v&agrave;o nh&agrave; nu&ocirc;i trồng v&agrave; chăm s&oacute;c nấm b&agrave;o ngư:</h2>\r\n\r\n<p><a href=\"http://camnangcaytrong.com/Uploads/UserFiles/images/quy%20trinh%20trong%20nam%20bao%20ngu%20xam%20chuan.jpg\"><img alt=\"quy trình trồng nấm bào ngư xám \" src=\"http://camnangcaytrong.com/Uploads/UserFiles/images/quy%20trinh%20trong%20nam%20bao%20ngu%20xam%20chuan.jpg\" /></a></p>\r\n\r\n<p>- Chọn những bịch c&oacute; sợi tơ nấm mọc trắng đều bịch, sau đ&oacute; tiến h&agrave;nh th&aacute;o n&uacute;t b&ocirc;ng ph&iacute;a tr&ecirc;n miệng bịch ph&ocirc;i hoặc d&ugrave;ng dao lam rạch từ 3 &ndash; 4 đường d&agrave;i khoảng 3 &ndash; 4cm tr&ecirc;n bịch ph&ocirc;i, sau khi rạch bịch để ng&agrave;y h&ocirc;m sau mới phun tưới nước.</p>\r\n\r\n<p>- Nước tưới nấm phải sạch, kh&ocirc;ng ph&egrave;n, kh&ocirc;ng chứa chất độc hại nấm v&agrave; n&ecirc;n tưới bằng b&igrave;nh phun sương hay v&ograve;i phun thật mịn. Tưới nước nhiều hay &iacute;t t&ugrave;y theo ẩm độ kh&ocirc;ng kh&iacute; của nh&agrave; nu&ocirc;i nấm. B&igrave;nh qu&acirc;n 2 lần/ng&agrave;y, nếu kh&ocirc; th&igrave; từ 3 &ndash; 4lần/ng&agrave;y.</p>\r\n\r\n<p>- Sao cho độ ẩm m&ocirc;i trường kh&ocirc;ng kh&iacute; nơi trồng nấm đạt 85-90%. Nhiệt độ th&iacute;ch hợp 25-32oC, nhiệt độ tối ưu 27-28oC. &Aacute;nh s&aacute;ng khuyếch t&aacute;n (c&oacute; thể đọc s&aacute;ch được) đ&acirc;y l&agrave; điều kiện th&iacute;ch hợp nhất để tạo quả thể nấm ph&aacute;t triển.</p>\r\n\r\n<h2>4. Thời vụ nu&ocirc;i trồng nấm b&agrave;o ngư</h2>\r\n\r\n<p>Nấm b&agrave;o ngư x&aacute;m c&oacute; bi&ecirc;n độ rất rộng về nhiệt độ v&agrave; ẩm độ v&igrave; vậy đối với thời tiết ở miền Nam nước ta sự ch&ecirc;nh lệch nhiệt độ giữa hai m&ugrave;a kh&ocirc;ng cao n&ecirc;n đều trồng được, nhưng thời vụ th&iacute;ch hợp nhất l&agrave; v&agrave;o m&ugrave;a mưa, v&igrave; l&uacute;c n&agrave;y độ ẩm kh&ocirc;ng kh&iacute; tương đối cao sẽ tiết kiệm được c&ocirc;ng tưới.</p>\r\n\r\n<h2>5. Kỹ thuật nu&ocirc;i trồng v&agrave; chăm s&oacute;c nấm b&agrave;o ngư:</h2>\r\n\r\n<h3>5.1. Kỹ thuật chăm s&oacute;c nấm b&agrave;o ngư:</h3>\r\n\r\n<p>- Sau khi đem ph&ocirc;i về 7 ng&agrave;y, th&aacute;o bỏ giấy b&aacute;o mục đ&iacute;ch l&agrave; gi&uacute;p nấm ra tr&ecirc;n cổ v&agrave; tạo được k&iacute;ch thước cũng như h&igrave;nh dạng của tai nấm đồng đều hơn.</p>\r\n\r\n<p>- Khi nấm ra, ở giai đoạn n&agrave;y rất dễ ảnh hưởng do c&aacute;c điều kiện ngoại cảnh. V&igrave; vậy, nh&agrave; trồng phải đ&aacute;p ứng c&aacute;c điều kiện như sau: giữ ẩm tốt ở 70 - 85%, nhiệt độ l&agrave; 28-36 0C, tho&aacute;ng&nbsp; v&agrave; sạch sẽ.</p>\r\n\r\n<p>Ch&uacute; &yacute; :&nbsp;Phải vệ sinh nh&agrave; thật sạch (d&ugrave;ng v&ocirc;i bột hoặc nước v&ocirc;i đ&atilde; pha lo&atilde;ng rắc tưới đều nền nh&agrave; trồng) trước khi đưa Ph&ocirc;i v&agrave;o.</p>\r\n\r\n<p>7 ng&agrave;y đầu kh&ocirc;ng tưới sau khi xếp bịch v&agrave;o nh&agrave; trồng, nhưng sau 7 ng&agrave;y (kể từ l&uacute;c th&aacute;o b&aacute;o) th&igrave; nấm xuất hiện quả thể tr&ecirc;n cổ t&uacute;i. Khi đ&oacute;, nấm rất cần nước, v&igrave; vậy vừa phun sương vừa tạo ẩm m&ocirc;i trường xung quanh (nước nền 2-3 lần trong ng&agrave;y). Từ l&uacute;c ra đinh ghim đến l&uacute;c thu h&aacute;i l&agrave; 4 ng&agrave;y (khi mũ nấm từ m&agrave;u x&aacute;m sang trắng x&aacute;m).</p>\r\n\r\n<p>- Nước tưới nấm phải sạch, kh&ocirc;ng ph&egrave;n, kh&ocirc;ng chứa chất độc hại nấm v&agrave; n&ecirc;n tưới phun sương thật mịn.&nbsp; Tưới nước nhiều hay &iacute;t t&ugrave;y theo ẩm độ kh&ocirc;ng kh&iacute; của nh&agrave; nu&ocirc;i nấm. B&igrave;nh qu&acirc;n 3 lần/ng&agrave;y, nếu kh&ocirc; th&igrave; từ 4 &ndash; 6 lần/ng&agrave;y.</p>\r\n\r\n<h3>Lưu &yacute;: C&aacute;ch tưới nước hiệu quả cho nấm b&agrave;o ngư:</h3>\r\n\r\n<p>- Nước c&oacute; Độ PH l&agrave; 6.5 &ndash; 7.5 l&agrave; tốt nhất.</p>\r\n\r\n<p>- Kh&ocirc;ng tưới thẳng l&ecirc;n bịch ph&ocirc;i m&agrave; phun xịt tạo mưa nhẹ rơi từ tr&ecirc;n xuống, tưới ướt c&aacute;c v&aacute;ch, nền nh&agrave; để tạo độ ẩm kh&ocirc;ng kh&iacute; cần thiết cho nh&agrave; trồng nấm. T&ugrave;y theo thời tiết m&agrave; tưới nhiều hay &iacute;t để tạo ẩm cho nh&agrave; trồng nấm, mỗi ng&agrave;y tưới 2 &ndash; 4 lần (khi mưa dầm ẩm ướt, kh&ocirc;ng cần tưới). Lưu &yacute; l&agrave; kh&ocirc;ng để giọt nước bắn thẳng v&agrave;o nụ nấm m&agrave; l&agrave;m hư hỏng n&oacute; v&agrave; biến dạng tai nấm.</p>\r\n\r\n<p>- Tưới nước dạng phun sương, lượng nước &iacute;t (phun sương hạt mịn) nhưng k&eacute;o d&agrave;i thời gian tưới sao cho nh&igrave;n bề mặt mũ nấm c&oacute; lớp nước đọng lại.</p>\r\n\r\n<p>- Trung b&igrave;nh ng&agrave;y tưới 3-6 lần.</p>\r\n\r\n<p>- Trong thời gian n&agrave;y nấm rất cần độ ẩm: Nếu thiếu nước, nấm sẽ cằn cỗi, ăn rất dai. Nếu tưới nhiều nước, nấm sẽ c&oacute; m&agrave;u v&agrave;ng.</p>\r\n\r\n<p>Lưu &yacute;: Trong qu&aacute; tr&igrave;nh tưới nước cho nấm, c&oacute; thể sử dụng th&ecirc;m chất k&iacute;ch th&iacute;ch sự trẻ h&oacute;a, gi&uacute;p nấm tươi tắn, tăng sức đề kh&aacute;ng, năng cao t&iacute;nh thương phẩm, n&acirc;ng cao chất lượng, sớm được thu hoạch, tăng sản lượng tr&ecirc;n 35% Xytokinin DA6 (tan ho&agrave;n to&agrave;n trong nước), Xytokinin &ndash; Kinetin hoặc Xytokinin BA6 với liều lượng khuyến c&aacute;o: nồng độ 5ppm phun từ 2 &ndash; 3 lần tương ứng 5g/1000 l&iacute;t nước.</p>\r\n\r\n<h3>5.2. Kỹ thuật thu h&aacute;i nấm b&agrave;o ngư hiệu quả</h3>\r\n\r\n<p><a href=\"http://camnangcaytrong.com/Uploads/UserFiles/images/thu%20hach%20nam%20bao%20ngu%20chuan(1).jpg\"><img alt=\"thu hoạch nấm bào ngư\" src=\"http://camnangcaytrong.com/Uploads/UserFiles/images/thu%20hach%20nam%20bao%20ngu%20chuan(1).jpg\" /></a></p>\r\n\r\n<p>Nấm mọc tập trung th&agrave;nh cụm n&ecirc;n khi nấm đủ lớn cần h&aacute;i cả cụm (trong cụm nấm c&oacute; 2-3 tai lớn).</p>\r\n\r\n<p>- D&ugrave;ng tay nắm lấy phần cuống nấm k&eacute;o nhẹ v&agrave; lấy hết cả ch&acirc;n nấm. Khi h&aacute;i xong phải quan s&aacute;t v&agrave; thu hết những ch&acirc;n nấm c&ograve;n s&oacute;t lại b&ecirc;n trong cổ t&uacute;i ph&ocirc;i.</p>\r\n\r\n<p>- Sau khi thu h&aacute;i Nấm, vệ sinh thu hết những phần ch&acirc;n nấm c&ograve;n lại. D&ugrave;ng nắp nhựa đậy ở đầu bịch ph&ocirc;i sau 7 - 10 ng&agrave;y th&igrave; mở nắp để thu tiếp tục.</p>\r\n\r\n<p>- Sau đ&oacute;, tiếp tục chăm s&oacute;c như l&uacute;c ban đầu v&agrave; cứ như vậy lặp lại từ 5-10 lần l&agrave; kết th&uacute;c qu&aacute; tr&igrave;nh thu h&aacute;i. Mỗi đợt c&aacute;ch nhau 15 - 25 ng&agrave;y.</p>\r\n\r\n<p>- Sau khi h&aacute;i nấm, kh&ocirc;ng n&ecirc;n tưới nước ngay v&agrave;o bịch nấm m&agrave; phải đợi v&agrave;i tiếng sau mới tưới v&igrave; nếu tưới ngay l&uacute;c vừa h&aacute;i nấm xong th&igrave; sẽ dễ khiến c&aacute;c ph&ocirc;i nấm trong bịch nấm sẽ dễ chết thối.</p>\r\n\r\n<p>- Sau khi thu hoạch nấm đợt 1 th&igrave; ngừng tưới nước khoảng 5 - 7 ng&agrave;y cho nấm mọc ra t&aacute;n mới. Khi bịch nấm hết đợt ra nấm th&igrave; ngừng tưới nước v&agrave;o bịch nấm, chỉ tưới nước l&ecirc;n nền v&agrave; xung quanh để ph&ograve;ng tạo ẩm mỗi ng&agrave;y. Sau 3 - 4 ng&agrave;y mới bắt đầu tưới phun sương v&agrave;o c&aacute;c bịch nấm để tạo ẩm v&agrave; k&iacute;ch th&iacute;ch nấm kết nụ tiếp.</p>\r\n\r\n<h2>6. Những lưu &yacute; khi nu&ocirc;i trồng, chăm s&oacute;c v&agrave; thu h&aacute;i nấm b&agrave;o ngư</h2>\r\n\r\n<h3>6.1. T&iacute;nh nhạy cảm của m&ocirc;i trường nu&ocirc;i cấy nấm b&agrave;o ngư</h3>\r\n\r\n<p>- Nấm b&agrave;o ngư l&agrave; một trong những lo&agrave;i nấm nhạy cảm với m&ocirc;i trường nhất. Ngo&agrave;i yếu tố nhiệt độ, ẩm độ, &aacute;nh s&aacute;ng, pH, nồng độ CO2 ..., nấm c&ograve;n đặc biệt nhạy cảm với c&aacute;c t&aacute;c nh&acirc;n g&acirc;y &ocirc; nhiễm m&ocirc;i trường, như ho&aacute; chất, thuốc trừ s&acirc;u, c&aacute;c kim loại nặng ... cả trong nguy&ecirc;n liệu cũng như trong kh&ocirc;ng kh&iacute; m&ocirc;i trường.</p>\r\n\r\n<p>- Tai nấm thường biến dạng hoặc ngưng tạo quả thể. Do đ&oacute;, cần kiểm tra điều kiện nu&ocirc;i trồng hoặc nguồn nguy&ecirc;n liệu khi nấm c&oacute; biểu hiện kh&ocirc;ng b&igrave;nh thường.</p>\r\n\r\n<h3>6.2. Dị ứng do b&agrave;o tử nấm b&agrave;o ngư :</h3>\r\n\r\n<p>- Trong c&aacute;c lo&agrave;i nấm trồng, th&igrave; đặc biệt thận trọng với b&agrave;o tử nấm b&agrave;o ngư. Nhiều người nhạy cảm với loại b&agrave;o tử n&agrave;y, sẽ biểu hiện ngay trong 08 giờ hoặc 4 &ndash; 6 tuần (ở trường hợp kh&aacute;c).</p>\r\n\r\n<p>- B&agrave;o tử nấm b&agrave;o ngư x&acirc;m nhập v&agrave;o cuống phổi, g&acirc;y triệu chứng kh&oacute; thở, mệt mỏi, nhiều vết đỏ ở tay, nhức đầu, ho v&agrave; sốt (c&oacute; thể đến 390C). Bệnh k&eacute;o d&agrave;i v&agrave;i ng&agrave;y rồi dứt, nhưng c&oacute; thể t&aacute;i đi t&aacute;i lại, khi tiếp x&uacute;c lại với nguồn bệnh.</p>\r\n\r\n<p>- Để tr&aacute;nh h&iacute;t phải b&agrave;o tử nấm (nấm b&agrave;o ngư, cũng như c&aacute;c lo&agrave;i nấm kh&aacute;c), n&ecirc;n đeo khẩu trang khi v&agrave;o khu vực nh&agrave; trồng, nhất l&agrave; v&agrave;o s&aacute;ng sớm khi trời c&ograve;n lạnh.</p>\r\n\r\n<h2>7. Những bệnh thường gặp khi nu&ocirc;i trồng v&agrave; chăm s&oacute;c nấm b&agrave;o ngư</h2>\r\n\r\n<p>- Nấm b&agrave;o ngư c&oacute; sức sống rất mạnh. Tuy nhi&ecirc;n, nấm lại rất nhạy cảm với m&ocirc;i trường, như nhiệt độ l&ecirc;n xuống đột ngột cũng c&oacute; thể l&agrave;m nấm ngừng tăng trưởng, kh&ocirc;ng mọc hoặc h&eacute;o nhũn. Nước tưới bị ph&egrave;n, bị mặn cũng l&agrave;m nấm kh&ocirc;ng ph&aacute;t triển được.</p>\r\n\r\n<p>- &nbsp;Qu&aacute; tr&igrave;nh cung cấp nước cho nấm, nếu giọt tưới lớn sẽ dễ l&agrave;m chết c&aacute;c tai nấm đang ph&aacute;t triển. Tai nấm trong trường hợp n&agrave;y, nhũn ra v&agrave; rũ xuống.</p>\r\n\r\n<p>- Đối với bệnh nhiễm, th&igrave; c&oacute; hai bệnh chủ yếu : Mốc xanh (Trichoderma.sp) v&agrave; ấu tr&ugrave;ng ruồi.</p>\r\n\r\n<p>Trichoderma.sp l&agrave; lo&agrave;i mốc ph&aacute;t triển tr&ecirc;n c&aacute;c cơ chất c&oacute; chất gỗ, l&agrave;m bịch nấm th&acirc;m đen lại, ảnh hưởng đến năng suất nấm. Để hạn chế sự ph&aacute;t triển của lo&agrave;i mốc n&agrave;y, cần khử tr&ugrave;ng tốt nguy&ecirc;n liệu trồng nấm hoặc n&acirc;ng pH m&ocirc;i trường.</p>\r\n\r\n<p>- Trường hợp ấu tr&ugrave;ng ruồi (d&ograve;i), ch&uacute;ng chui v&agrave;o c&aacute;c khe cửa phiến nấm, cắn ph&aacute; l&agrave;m hư hại nấm. Tốc độ sinh sản ch&uacute;ng lại rất nhanh, n&ecirc;n thiệt hại kh&ocirc;ng phải nhỏ. Nh&agrave; trồng v&igrave; vậy n&ecirc;n l&agrave;m lưới chắn, để cho ch&uacute;ng kh&ocirc;ng lọt v&agrave;o. Tuy nhi&ecirc;n, vấn đề ch&iacute;nh l&agrave; vệ sinh nh&agrave; trại, kh&ocirc;ng để ổ dịch.</p>\r\n\r\n<p>- Nấm b&agrave;o ngư thuộc nh&oacute;m nấm ph&aacute; hoại gỗ, sống chủ yếu hoại sinh (ngoại trừ một v&agrave;i lo&agrave;i k&yacute; sinh, như P.ostrcatus, P.erygii). Nhiều nghi&ecirc;n cứu cho thấy việc bổ sung bột đậu n&agrave;nh, bột l&ocirc;ng vũ cũng gi&uacute;p nấm b&agrave;o ngư mọc tốt hơn.</p>\r\n\r\n<h2>8. C&aacute;ch bảo quản v&agrave; chế biến sau thu hoạch nấm b&agrave;o ngư</h2>\r\n\r\n<h3>8.1. Sự biến đổi của nấm b&agrave;o ngư sau thu hoạch:</h3>\r\n\r\n<p>- Mất nước: nấm thường chứa nhiều nước (85-95%) v&agrave; lượng nước cần thiết n&agrave;y mất rất nhanh do h&ocirc; hấp v&agrave; bốc hơi.</p>\r\n\r\n<p>- Sự h&oacute;a n&acirc;u: do ở nấm c&oacute; men (enzym) polyphenoloxidaz x&uacute;c t&aacute;c phản ứng oxid ho&aacute; hợp chất phenolic kh&ocirc;ng m&agrave;u của nấm th&agrave;nh quinon tạo m&agrave;u đỏ đến n&acirc;u đỏ. Tuy nhi&ecirc;n qu&aacute; tr&igrave;nh n&agrave;y diễn ra rất chậm, khi nấm ho&aacute; n&acirc;u sẽ l&agrave;m giảm gi&aacute; trị thương phẩm.</p>\r\n\r\n<h3>8.2. Bảo quản nấm b&agrave;o ngư sau thu h&aacute;i</h3>\r\n\r\n<p>Lưu &yacute;:&nbsp;Muốn bảo quản nấm tốt nhất n&ecirc;n thu h&aacute;i sau khi tưới nước &iacute;t nhất l&agrave; 3 giờ, để tai nấm kh&ocirc; r&aacute;o kh&ocirc;ng bị ướt.</p>\r\n\r\n<p>H&aacute;i nấm xong dung dao cắt sạch phần ch&acirc;n nấm (kh&ocirc;ng c&ograve;n m&agrave;u v&agrave;ng), cho v&agrave;o t&uacute;i buộc k&iacute;n miện t&uacute;i. Nếu muốn bảo quản l&acirc;u phải cho t&uacute;i nấm v&agrave;o ph&ograve;ng m&aacute;t hạ nhiệt độ xuống 16 &ndash; 18 0C.</p>\r\n\r\n<p>Phơi hoặc sấy kh&ocirc;:&nbsp;d&ugrave;ng tay x&eacute; nhỏ nấm theo chiều dọc. Phơi nấm dưới &aacute;nh nắng 1 ng&agrave;y, đem sấy ở nhiệt độ 40&nbsp; &ndash; 45 0C trong v&agrave;i giờ đầu, khi nấm đ&atilde; se kh&ocirc; n&acirc;ng nhiệt độ l&ecirc;n tối đa 50 &ndash; 55 0C. Cho v&agrave;o t&uacute;i nilong k&iacute;n để bảo quản.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-19 11:34:04', '2022-12-19 11:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` bigint(20) UNSIGNED NOT NULL,
  `hovaten` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_02_122007_sanpham', 1),
(3, '2022_11_05_125126_lienhe', 1),
(4, '2022_11_05_131115_daily', 1),
(5, '2022_11_05_131147_hethong-cuahang', 1),
(6, '2022_11_05_131216_tintuc', 1),
(7, '2022_11_05_131237_kythuat', 1),
(8, '2022_11_11_114411_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` bigint(20) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `loaisanpham` varchar(255) NOT NULL,
  `anhsanpham` text NOT NULL,
  `motasanpham` text DEFAULT NULL,
  `thongtinsanpham` text DEFAULT NULL,
  `giasanpham` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `loaisanpham`, `anhsanpham`, `motasanpham`, `thongtinsanpham`, `giasanpham`, `created_at`, `updated_at`) VALUES
(1, 'ĐU ĐỦ ĐÀI LOAN RUỘT ĐỎ', 'Hạt giống cây ăn trái', '1671459972.jpg', '<p>Đu đủ c&oacute; thể xem l&agrave; &ldquo;thần dược&rdquo;, v&igrave; nhiều bộ phận của c&acirc;y đu đủ kh&ocirc;ng những được d&ugrave;ng l&agrave;m thức ăn m&agrave; c&ograve;n được d&ugrave;ng l&agrave;m thuốc chữa nhiều bệnh như: bệnh tim, chứng mất ngủ, hay hồi hộp, đau lưng mỏi gối, vi&ecirc;m dạ d&agrave;y m&atilde;n t&iacute;nh&hellip;</p>\r\n\r\n<p>Bảo vệ tr&aacute;i tim</p>\r\n\r\n<p>Gi&uacute;p hệ ti&ecirc;u h&oacute;a th&ecirc;m khỏe mạnh</p>\r\n\r\n<p>Ăn thỏa th&iacute;ch vẫn giảm c&acirc;n</p>\r\n\r\n<p>Tăng cường sức đề kh&aacute;ng v&agrave; chống vi&ecirc;m nhiễm</p>\r\n\r\n<p>Trị rụng t&oacute;c</p>\r\n\r\n<p>Cải thiện vẻ gợi cảm cho v&ograve;ng 1</p>', '<p><strong>C&aacute;ch trồng c&acirc;y:</strong></p>\r\n\r\n<p><strong>Ti&ecirc;u chuẩn đất trồng :</strong></p>\r\n\r\n<p><strong>Đu đủ Đ&agrave;i Loan</strong>&nbsp;kh&aacute; dễ t&iacute;nh n&ecirc;n c&oacute; thể trồng tr&ecirc;n nhiều loại đất kh&aacute;c nhau. Tốt nhất n&ecirc;n l&agrave; đất thịt pha c&aacute;t c&oacute; th&agrave;nh phần cơ giới nhẹ. Độ Ph khoảng 6-6,5 v&agrave; cần tơi xốp tho&aacute;t nước tốt.</p>\r\n\r\n<p><strong>L&agrave;m hố trồng c&acirc;y:</strong></p>\r\n\r\n<p>- Hố trồng n&ecirc;n c&oacute; k&iacute;ch thước 50x50x50cm.</p>\r\n\r\n<p>- Khoảng c&aacute;ch trồng mỗi c&acirc;y từ 2m trở l&ecirc;n.</p>\r\n\r\n<p><em>Kỹ thuật trồng đu đủ Đ&agrave;i Loan:</em></p>\r\n\r\n<p>C&acirc;y&nbsp;<strong>đu đủ Đ&agrave;i Loan</strong>&nbsp;c&oacute; thể trồng v&agrave;o vụ xu&acirc;n khoảng th&aacute;ng 3-4 hoặc v&agrave;o vụ thu th&aacute;ng 9. Sau khi đ&agrave;o hố, bạn tiến h&agrave;nh b&oacute;n l&oacute;t v&agrave;o hố khoảng 15kg ph&acirc;n chuồng, 1kg ph&acirc;n L&acirc;n c&ugrave;ng lượng v&ocirc;i bột vừa đủ để khử tr&ugrave;ng đất. Trộn đều tất cả hỗn hợp ph&acirc;n với đất lại rồi lấp đầy hố trồng.</p>\r\n\r\n<p>C&acirc;y con giống được trồng ch&iacute;nh giữa hố. Bỏ bầu nilon b&ecirc;n dưới v&agrave; nhẹ nh&agrave;ng đặt xuống đất theo hướng thẳng đứng. Bạn n&eacute;n chặt gốc cố định c&acirc;y rồi tưới nước ngay. C&oacute; thể d&ugrave;ng rơm rạ để ủ b&ecirc;n dưới giữ ẩm đất</p>\r\n\r\n<p><em>Chăm s&oacute;c đu đủ Đ&agrave;i Loan :</em></p>\r\n\r\n<p>Khi mới trồng bạn cần ch&uacute; &yacute; cung cấp đầy đủ lượng nước tưới cho c&acirc;y. M&ugrave;a mưa n&ecirc;n ch&uacute; &yacute; tr&aacute;nh cho gốc bị ngập &uacute;ng v&agrave; cần l&agrave;m sạch cỏ dại xung quanh gốc để tr&aacute;nh mầm bệnh ảnh hưởng đến c&acirc;y.</p>\r\n\r\n<p>Định k&igrave; h&agrave;ng năm b&oacute;n th&uacute;c cho c&acirc;y 3 lần: Lần 1 sau khi trồng 1,5 th&aacute;ng. Lần 2 b&oacute;n th&uacute;c khi c&acirc;y bắt đầu ra hoa v&agrave; lần cuối b&oacute;n th&uacute;c khi c&acirc;y đang ph&aacute;t triển quả. Loại ph&acirc;n b&oacute;n n&ecirc;n chọn l&agrave; ph&acirc;n NPK (20;10;20) v&agrave; một lượng ph&acirc;n chuồng vừa đủ. Ph&acirc;n NPK bạn h&ograve;a v&agrave;o nước v&agrave; tưới xung quanh gốc c&aacute;ch 30cm.</p>\r\n\r\n<p>Sau khi thu hoạch năm đầu ti&ecirc;n bạn chọn những c&acirc;y khỏe mạnh nhất để l&agrave;m giống cho năm sau. Những c&acirc;y yếu c&ograve;i cọc n&ecirc;n loại bỏ để trồng mới. Chế độ chăm s&oacute;c h&agrave;ng năm như nhau. Ch&uacute; &yacute; sau mỗi lần thu hoạch cần b&oacute;n th&ecirc;m ph&acirc;n b&oacute;n để gi&uacute;p c&acirc;y mau lại sức.</p>\r\n\r\n<p><em>Ph&ograve;ng trừ s&acirc;u bệnh cho đu đủ Đ&agrave;i Loan:</em></p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh ph&aacute;t triển&nbsp;<strong>đu đủ Đ&agrave;i Loan</strong>&nbsp;c&oacute; thể bị ảnh hưởng bởi một số loại s&acirc;u bệnh hại như bọ x&iacute;t, bọ nhảy, rệp x&acirc;m nhập v&agrave; cắn ph&aacute; c&acirc;y. Để khắc phục t&igrave;nh trạng n&agrave;y bạn tiến h&agrave;nh phun chế phẩm sinh học Trebon (1%) để loại trừ c&aacute;c loại s&acirc;u bệnh. Ngo&agrave;i ra cần thường xuy&ecirc;n thăm vườn vệ sinh vườn sạch sẽ, nhổ sạch cỏ dại v&agrave; rắc v&ocirc;i bột để diệt nấm bệnh sau mỗi vụ thu hoạch.</p>\r\n\r\n<p><strong>Thu hoạch</strong></p>\r\n\r\n<p>Đu đủ Đ&agrave;i Loan sau khi trồng khoảng 7 th&aacute;ng c&oacute; thể cho thu hoạch. Khi quả ch&iacute;n m&agrave;u xanh dần dần chuyển sang v&agrave;ng s&aacute;ng. C&acirc;y sẽ ch&iacute;n từ dưới l&ecirc;n. Bạn thu h&aacute;i dần những quả ch&iacute;n cho đến hết. Với giống&nbsp;<strong>đu đủ Đ&agrave;i Loan</strong>&nbsp;n&agrave;y nếu bảo quản cẩn thận c&oacute; hể giữ được khoảng nửa th&aacute;ng.</p>', 10000, '2022-12-19 00:26:12', '2022-12-19 00:26:12'),
(2, 'CẢI BẸ XANH MỠ RADO 57', 'Hạt giống rau', '1671460113.jpg', '<p>-&nbsp;C&acirc;y ph&aacute;t triển khỏe, kh&aacute;ng bệnh tốt.</p>\r\n\r\n<p>-&nbsp;Trồng được quanh năm, năng suất cao.</p>\r\n\r\n<p>-&nbsp;Thu hoạch 30 &ndash; 35 ng&agrave;y sau khi gieo.</p>', '<p><strong>Hướng dẫn ươm hạt giống:</strong></p>\r\n\r\n<p>BƯỚC 1: CHUẨN BỊ</p>\r\n\r\n<p>- Khay nhựa đ&aacute;y phẳng</p>\r\n\r\n<p>- M&uacute;t Xốp Ươm C&acirc;y</p>\r\n\r\n<p>- Hạt giống</p>\r\n\r\n<p>- Dinh dưỡng thủy canh</p>\r\n\r\n<p>&radic; Dinh dưỡng thủy canh</p>\r\n\r\n<p>BƯỚC 2: TẠO M&Ocirc;I TRƯỜNG ẨM CHO GI&Aacute; THỂ</p>\r\n\r\n<p>- Để tạo m&ocirc;i trường ẩm cho M&Uacute;T XỐP, bạn cần &ldquo;NHỒI&rdquo; M&Uacute;T XỐP v&agrave;o th&ugrave;ng nước, chậu nước CHO ĐẾN KHI TẤM M&Uacute;T NGẬM ĐẦY NƯỚC.</p>\r\n\r\n<p>BƯỚC 3: ĐẶT TẤM M&Uacute;T V&Agrave;O KHAY NHỰA CHUẨN BỊ SẴN</p>\r\n\r\n<p>- Cho nước ngập &frac12; tấm m&uacute;t xốp</p>\r\n\r\n<p><strong>BƯỚC 4: GIEO HẠT V&Agrave;O LỖ ĐỤC SẴN</strong></p>\r\n\r\n<p>- Gieo 2 &ndash; 3 hạt v&agrave;o mỗi lỗ được đục sẵn (lưu &yacute; gieo hạt hạt kh&ocirc; sẽ thuận tiện hơn trong qu&aacute; tr&igrave;nh gieo)</p>\r\n\r\n<p>- Sử dụng nước ấm 500C tưới phun sương l&ecirc;n bề mặt gi&aacute; thể từ 2 &ndash; 5 ph&uacute;t</p>\r\n\r\n<p>- D&ugrave;ng tấm che che k&iacute;n khay ươm trong v&ograve;ng 48H để k&iacute;ch th&iacute;ch nảy mầm</p>\r\n\r\n<p>- Tưới phun sương đều đặn l&ecirc;n m&uacute;t mỗi ng&agrave;y 2 lần sang chiều</p>\r\n\r\n<p>BƯỚC 5: ĐƯA C&Acirc;Y RA KHU VỰC NHIỀU &Aacute;NH S&Aacute;NG</p>\r\n\r\n<p>- Sau khi c&acirc;y nảy mầm, cất tấm che, đưa khay ươm ra khu vực nhiều &aacute;nh sang trực tiếp</p>\r\n\r\n<p>- Tiếp tục giữ ẩm bề mặt tấm m&uacute;t bằng tưới phun sương s&aacute;ng chiều.</p>\r\n\r\n<p>- Giữ mực nước trong khay bằng dinh dưỡng nồng độ 400 &ndash; 600ppm.</p>\r\n\r\n<p>BƯỚC 6: CHO C&Acirc;Y CON L&Ecirc;N GI&Agrave;N</p>\r\n\r\n<p>- Lọc những bỏ những c&acirc;y k&eacute;m ph&aacute;t triển</p>\r\n\r\n<p>- Cho những c&acirc;y ph&aacute;t triển tốt l&ecirc;n gi&agrave;n để tiếp tục qu&aacute; tr&igrave;nh ph&aacute;t triển của c&acirc;y</p>', 18000, '2022-12-19 00:28:33', '2022-12-19 00:28:33'),
(3, 'MẦM RAU MUỐNG RADO 16', 'Hạt giống rau mầm', '1671460179.jpg', '<p>Rau mầm l&agrave; loại rau non n&ecirc;n c&oacute; h&agrave;m lượng chất dinh dưỡng rất cao, gấp khoảng 5 lần rau th&ocirc;ng thường. Việc trồng rau cũng rất dễ d&agrave;ng, bạn ho&agrave;n to&agrave;n c&oacute; thể trồng&nbsp;với những bước v&ocirc; c&ugrave;ng đơn giản.</p>', '<p><strong>Trồng rau mầm bằng giấy ăn</strong></p>\r\n\r\n<p><strong><em>Bước 1: Chuẩn bị nguy&ecirc;n liệu:</em></strong></p>\r\n\r\n<p>- Hạt giống.</p>\r\n\r\n<p>- Giấy ăn: Chỉ cần lấy loại giấy ăn thường d&ugrave;ng.</p>\r\n\r\n<p>- Khay: Bạn c&oacute; thể tận dụng những khay nhựa, hay i-nox, xoong, nồi.</p>\r\n\r\n<p><strong><em>Bước 2: Ng&acirc;m hạt giống:</em></strong></p>\r\n\r\n<p>Hạt giống đem ng&acirc;m nước theo tỉ lệ 2 s&ocirc;i v&agrave; 3 lạnh. Tuy nhi&ecirc;n c&oacute; một số loại hạt giống kh&ocirc;ng cần ng&acirc;m hạt th&igrave; bạn c&oacute; thể gieo trực tiếp.</p>\r\n\r\n<p>Sau đ&oacute; loại bỏ những hạt l&eacute;p, s&acirc;u, nhỏ, những hạt n&agrave;y sẽ kh&ocirc;ng nảy mầm hoặc nếu c&oacute; nảy mầm th&igrave; kh&ocirc;ng lớn nhanh hoặc giữa chừng th&igrave; bị chết. Sau khi đ&atilde; ng&acirc;m xong, rửa hạt giống qua nước.</p>\r\n\r\n<p><strong><em>Bước 3: Gieo hạt:</em></strong></p>\r\n\r\n<p>Rải giấy ăn v&agrave;o khay v&agrave; tưới đẫm nước. Sau đ&oacute; gieo hạt l&ecirc;n tr&ecirc;n v&agrave; tưới nước đẫm hạt.</p>\r\n\r\n<p>N&ecirc;n tưới 1-2 lần mỗi ng&agrave;y. Khi mầm nh&uacute; l&ecirc;n dần dần th&igrave; lượng nước cũng cần nhiều hơn. Tuy nhi&ecirc;n kh&ocirc;ng tưới qu&aacute; nhiều để tr&aacute;nh t&igrave;nh trạng&nbsp;ngập &uacute;ng.</p>\r\n\r\n<p><strong><em>Bước 4: Thu hoạch</em></strong></p>\r\n\r\n<p>Thu hoạch rau mầm sau 7 ng&agrave;y kể từ ng&agrave;y gieo hạt.</p>', 18000, '2022-12-19 00:29:39', '2022-12-19 00:29:39'),
(4, 'CỦ CẢI ĐỎ TRÒN BABY', 'Hạt giống các loại củ', '1671460311.jpg', '<p>- L&agrave; c&acirc;y rất gi&agrave;u dinh dưỡng, gi&agrave;u vitamin, c&oacute; thể d&ugrave;ng chế biến canh hầm, salat, nấu bột cho trẻ nhỏ v&agrave; nhiều m&oacute;n ngon kh&aacute;c...</p>', '<p><strong>Hướng dẫn kỹ thuật trồng củ&nbsp;cải đỏ tr&ograve;n Baby đơn giản nhất</strong></p>\r\n\r\n<p><strong>1. Chuẩn bị dụng cụ trồng, đất trồng v&agrave; giống để trồng củ&nbsp;cải đỏ tr&ograve;n Baby</strong></p>\r\n\r\n<p><strong><em>1.1. Dụng cụ trồng</em></strong></p>\r\n\r\n<p>- Bạn c&oacute; thể tận dụng bao nion, bao xi măng, chậu, khay, th&ugrave;ng xốp c&oacute; sẵn trong nh&agrave; hoặc mảnh đất trống trong vườn để trồng củ cải. Lưu &yacute;: Dưới đ&aacute;y khay đục lỗ để tho&aacute;t nước.</p>\r\n\r\n<p><strong><em>1.2. Đất trồng th&iacute;ch hợp nhất&nbsp;cho củ cải đỏ</em></strong></p>\r\n\r\n<p>- Củ cải kh&ocirc;ng qu&aacute; k&eacute;n đất, n&oacute; c&oacute; thể sinh trưởng v&agrave; ph&aacute;t triển ở nhiều loại đất kh&aacute;c nhau. Bạn c&oacute; thể mua đất sẵn hoặc tiến h&agrave;nh trộn đất với ph&acirc;n b&ograve; hoai mục, ph&acirc;n g&agrave;, ph&acirc;n tr&ugrave;n quế, vỏ trấu, xơ dừa&hellip;</p>\r\n\r\n<p>- Đối với phương thức gieo trong khay, chậu: do diện t&iacute;ch của khay, chậu kh&ocirc;ng lớn n&ecirc;n phần đất n&agrave;y phải ưu việt (tốt) một ch&uacute;t nh&eacute;! Bạn trộn đất theo c&ocirc;ng thức sau: khoảng 40% ph&acirc;n hữu cơ (ph&acirc;n ủ từ thực vật, ph&acirc;n chuồng hoai mục, ph&acirc;n tr&ugrave;n quế&hellip;) +50% đất trồng (đất ph&ugrave; sa c&agrave;ng tốt) + 10% trấu hun hoặc m&ugrave;n dừa. Bạn đưa đất đ&atilde; chuẩn bị v&agrave;o chậu v&agrave; san phẳng (ch&uacute; &yacute; kh&ocirc;ng đổ đầy l&ecirc;n tới tận th&agrave;nh chậu nh&eacute;, khi bạn tưới nước th&igrave; nước sẽ tr&agrave;n ra ngo&agrave;i đấy!).</p>\r\n\r\n<p><strong><em>1.3 . Hạt giống củ cải đỏ</em></strong></p>\r\n\r\n<p>- Hạt giống bạn c&oacute; thể t&igrave;m mua ở c&aacute;c cửa h&agrave;ng b&aacute;n đồ n&ocirc;ng sản hoặc si&ecirc;u thị gần nh&agrave;. N&ecirc;n chọn những giống củ cải cao sản để thu hoạch đạt được năng suất cao nhất.</p>\r\n\r\n<p>- Bạn c&oacute; thể sử dụng hạt giống củ&nbsp;cải đỏ tr&ograve;n Baby&nbsp;của c&ocirc;ng ty giống Rạng Đ&ocirc;ng l&agrave; loại giống chất lượng cao, c&acirc;y sinh trưởng tốt, chống lại với s&acirc;u bệnh cao, đạt sản lượng lớn.</p>\r\n\r\n<p><strong><em>2. Ng&acirc;m ủ v&agrave; gieo hạt củ cải đỏ</em></strong></p>\r\n\r\n<p>- Để hạt nảy mầm nhanh, bạn c&oacute; thể ng&acirc;m hạt giống v&agrave;o nước ấm c&oacute; nhiệt độ khoảng 40 độ C khoảng 3 - 5 tiếng. L&oacute;t 1 lớp b&ocirc;ng g&ograve;n xuống đ&aacute;y một c&aacute;i ch&eacute;n nhỏ, tưới nước cho ấm v&agrave; rải hạt l&ecirc;n tr&ecirc;n lớp b&ocirc;ng sau đ&oacute; phủ tiếp 1 lớp b&ocirc;ng g&ograve;n kh&aacute;c l&ecirc;n tr&ecirc;n, tưới ẩm. Chờ đến khi hạt xuất hiện vết nứt nhỏ th&igrave; bắt đầu đem trồng ra đất.</p>\r\n\r\n<p>- Gieo hạt với khoảng c&aacute;ch h&agrave;ng c&aacute;ch h&agrave;ng 10 - 15cm, c&acirc;y c&aacute;ch c&acirc;y 10cm. Sau khi gieo xong tiến h&agrave;nh phủ 1 lớp đất mỏng v&agrave; tưới nước giữ ẩm.</p>\r\n\r\n<p><strong><em>3. Chăm s&oacute;c củ cải đỏ baby đơn giản nhất</em></strong></p>\r\n\r\n<p>- Ng&agrave;y tưới nước 2 lần v&agrave;o s&aacute;ng sớm v&agrave; chiều m&aacute;t.</p>\r\n\r\n<p>- Khi c&acirc;y được chừng 20 ng&agrave;y, tỉa bớt c&aacute;c c&acirc;y con yếu, tuyệt đối kh&ocirc;ng nhổ l&ecirc;n trồng lại v&igrave; c&acirc;y sẽ kh&ocirc;ng ph&igrave;nh củ được. Sau đ&oacute; tiến h&agrave;nh b&oacute;t l&oacute;t đợt 1 cho c&acirc;y bằng ph&acirc;n hữu cơ, ph&acirc;n b&ograve;, ph&acirc;n d&ecirc;, ph&acirc;n tr&ugrave;n quế&hellip; Cứ 20 ng&agrave;y lại b&oacute;n đợt tiếp theo. Mỗi đợt b&oacute;t ph&acirc;n kết hợp xới đất v&agrave; nhổ cỏ.</p>\r\n\r\n<p>- Để cho c&acirc;y sinh trưởng, ph&aacute;t triển nhanh, chất lượng quả đạt cao v&agrave; h&agrave;m lượng dinh dưỡng đạt cao nhất bạn c&oacute; thể b&oacute;n c&aacute;c loại ph&acirc;n b&oacute;n chuy&ecirc;n d&ugrave;ng như:&nbsp;ph&acirc;n b&oacute;n NPK H&agrave; Lan 15-5-27,&nbsp;ph&acirc;n b&oacute;n hữu cơ,...</p>\r\n\r\n<p><strong><em>4. Thu hoạch củ cải đỏ đ&uacute;ng thời điểm</em></strong></p>\r\n\r\n<p>- Sau khi trồng khoảng 60 - 80 ng&agrave;y th&igrave; củ&nbsp;cải&nbsp;bắt đầu cho thu hoạch. N&ecirc;n thu hoạch khi củ chưa ph&acirc;n ho&aacute; gi&agrave; (xơ cứng) bởi khi để qu&aacute; gi&aacute; sẽ l&agrave;m giảm cảm quan cũng như dinh dưỡng của củ&nbsp;cải.</p>\r\n\r\n<p>- Củ cải c&oacute; thể sử dụng được cả l&aacute; v&agrave; củ. Nếu bạn muốn sử dụng l&aacute; th&igrave; c&oacute; thể tỉa l&aacute; sử dụng trước, hoặc c&oacute; thể nhổ cả c&acirc;y để sử dụng.</p>', 16000, '2022-12-19 00:31:52', '2022-12-19 00:31:52'),
(5, 'BỒ CÔNG ANH 924', 'Hạt giống các loại hoa', '1671460371.jpg', '<p>Bạn c&oacute; thể nhận ra&nbsp;h&igrave;nh ảnh c&acirc;y hoa bồ c&ocirc;ng anh&nbsp;nếu nắm được đặc điểm của n&oacute;. Bồ c&ocirc;ng anh l&agrave; c&acirc;y th&acirc;n cỏ, th&acirc;n nhẵn,&nbsp; kh&ocirc;ng cảnh, mọc cao khoảng 1-3m. L&aacute; c&acirc;y d&agrave;i, xếp so le nhau, m&eacute;p c&oacute; viền răng cưa. Th&acirc;n c&acirc;y c&oacute; dịch m&agrave;u trắng đục như sữa. Cụm hoa bồ c&ocirc;ng anh hợp th&agrave;nh ch&ugrave;y, mọc ở phần kẽ l&aacute;, ngọn th&acirc;n.&nbsp; Hoa c&oacute; m&agrave;u v&agrave;ng hoặc trắng. Quả bồ c&ocirc;ng anh m&agrave;u đen, c&oacute; l&ocirc;ng.</p>', '<p>HƯỚNG DẪN C&Aacute;CH GIEO HẠT V&Agrave; CHĂM S&Oacute;C&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&ndash; Gieo hạt: để cho năng suất cao th&igrave; bạn cần lựa chọn hạt giống thật tốt, n&ecirc;n cắt hạt bồ c&ocirc;ng anh đi để loại bỏ những l&ocirc;ng tơ trắng để cho gọn bớt v&agrave; dễ gieo trồng. Đất cần được l&agrave;m ẩm trước khi gieo, khoảng c&aacute;ch gieo trồng giữa c&aacute;c hạt l&agrave; 5 cm. Khi gieo xong th&igrave; nhớ d&ugrave;ng nước để tưới phun sương cho ẩm hoặc nếu kh&ocirc;ng c&oacute; th&igrave; bạn c&oacute; thể ngậm nước để phun v&agrave;o đất.&nbsp;&nbsp;</p>\r\n\r\n<p>&ndash; Khi c&acirc;y được khoảng 30 ng&agrave;y, c&acirc;y đủ lớn th&igrave; bạn c&oacute; thể đem cấy c&acirc;y ra chỗ c&oacute; diện t&iacute;ch rộng hơn. Sau khi c&acirc;y trồng xuống đất th&igrave; cần được chăm s&oacute;c cẩn thận nhiều hơn. Bồ c&ocirc;ng anh kh&aacute; ưa ẩm thế nhưng bạn cũng n&ecirc;n để ngập nước v&igrave; c&oacute; thể l&agrave;m cho c&acirc;y bị ngập &uacute;ng. N&ecirc;n trồng nơi c&oacute; &aacute;nh nắng, kh&ocirc;ng n&ecirc;n để nơi qu&aacute; r&acirc;m m&aacute;t v&igrave; bồ c&ocirc;ng anh kh&aacute; ưa th&iacute;ch &aacute;nh s&aacute;ng mạnh.&nbsp;&nbsp;</p>\r\n\r\n<p>&ndash; B&oacute;n ph&acirc;n: Kh&ocirc;ng n&ecirc;n d&ugrave;ng ph&acirc;n h&oacute;a học để b&oacute;n cho bồ c&ocirc;ng anh, bạn h&atilde;y d&ugrave;ng ho&agrave;n to&agrave;n ph&acirc;n hữu cơ để b&oacute;n. Thế nhưng cũng n&ecirc;n b&oacute;n qu&aacute; nhiều, thỉnh thoảng n&ecirc;n b&oacute;n ph&acirc;n để cung cấp dinh dưỡng cho c&acirc;y. Mỗi lần chỉ n&ecirc;n b&oacute;n một loại nhỏ để c&acirc;y kh&ocirc;ng bị n&oacute;ng. C&aacute;ch thực hiện đ&uacute;ng l&agrave; bạn bỏ ph&acirc;n chuồng v&agrave;o gốc, hoặc c&oacute; thể đ&agrave;o đất.</p>', 25000, '2022-12-19 00:32:51', '2022-12-19 00:32:51'),
(6, 'Chậu cây cảnh composite Esteras Kent', 'Chậu', '1671460592.jpg', '<p><em><strong>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</strong></em>&nbsp;mang n&eacute;t đẹp tinh tế từ bề mặt chất liệu cho đến mẫu m&atilde;. Chậu sở hữu độ bền cao của chất liệu composite đ&aacute;p ứng được nhu cầu của kh&aacute;ch h&agrave;ng đạt ti&ecirc;u chuẩn cả về chất lượng v&agrave; thẩm mỹ.</p>', '<p><em><strong>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</strong></em>&nbsp;mang n&eacute;t đẹp tinh tế từ bề mặt chất liệu cho đến mẫu m&atilde;. Chậu sở hữu độ bền cao của chất liệu composite đ&aacute;p ứng được nhu cầu của kh&aacute;ch h&agrave;ng đạt ti&ecirc;u chuẩn cả về chất lượng v&agrave; thẩm mỹ.</p>\r\n\r\n<p><a href=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-cay-canh-composite-esteras-kent-tron-dep-1.jpg\"><img alt=\"Chậu Cây Cảnh Composite Esteras Kent Tròn Đẹp\" src=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-cay-canh-composite-esteras-kent-tron-dep-1.jpg\" style=\"height:553px; width:554px\" /></a></p>\r\n\r\n<p>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</p>\r\n\r\n<p>Bởi vậy m&agrave; hiện nay tr&ecirc;n thị trường&nbsp;<em><strong>chậu trồng c&acirc;y composite đ&atilde; v&agrave; đang phổ biến tr&ecirc;n thị trường</strong></em>&nbsp;thay thế được c&aacute;c loại chậu truyền thống. Chậu composite c&oacute; rất nhiều ưu điểm vượt xa c&aacute;c loại chậu th&ocirc;ng thường kh&aacute;c n&ecirc;n rất được kh&aacute;ch h&agrave;ng tin tưởng v&agrave; lựa chọn sử dụng.</p>\r\n\r\n<p><a href=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-cay-canh-composite-esteras-kent-tron-dep-2.jpg\"><img alt=\"Chậu Cây Cảnh Composite Esteras Kent Tròn Đẹp\" src=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-cay-canh-composite-esteras-kent-tron-dep-2.jpg\" style=\"height:553px; width:554px\" /></a></p>\r\n\r\n<p>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</p>\r\n\r\n<p>Tuy chậu nhựa composite c&oacute; thiết kế giản đơn nhưng v&ocirc; c&ugrave;ng tinh tế v&agrave; sang trọng, m&agrave;u sắc tự nhi&ecirc;n, chất lượng bền bỉ. Rất ph&ugrave; hợp để trồng mọi loại c&acirc;y cảnh trang tr&iacute;. Tiết kiệm được thời gian vệ sinh lau ch&ugrave;i bảo quản. V&agrave; đặc biệt&nbsp;<em><strong>gi&aacute; b&aacute;n chậu trồng c&acirc;y composite Esteras</strong></em>&nbsp;rất hợp l&yacute;. Bạn chỉ cần t&igrave;m tới những đơn vị chuy&ecirc;n cung cấp chậu c&acirc;y cảnh uy t&iacute;n chất lượng. L&agrave; bạn đ&atilde; sở hữu được mẫu chậu composite cao cấp nhất. Li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i C&acirc;y Cảnh H&agrave; Nội để&nbsp;<em><strong>đặt mua chậu c&acirc;y cảnh composite cao cấp</strong></em>. Li&ecirc;n hệ theo số: (024)6683.5533 hoặc 0915.885.558 hoặc 0966.623.933 hoặc 0981.525.055.</p>\r\n\r\n<p><a href=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-nhua-composite-esteras-bronley-chu-nhat-sang-trong-3.jpg\"><img alt=\"Chau Nhua Composite Esteras Bronley Chu Nhat Sang Trong 3\" src=\"http://chaucay.vn/wp-content/uploads/2019/01/chau-nhua-composite-esteras-bronley-chu-nhat-sang-trong-3.jpg\" style=\"height:553px; width:554px\" /></a></p>\r\n\r\n<p>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</p>\r\n\r\n<h2><strong>Chậu c&acirc;y cảnh composite Esteras Kent tr&ograve;n đẹp</strong></h2>\r\n\r\n<p><strong>&ndash; Chất liệu:</strong>&nbsp;Composite<br />\r\n<strong>&ndash; M&agrave;u sắc:</strong>&nbsp;m&agrave;u đất x&aacute;m<br />\r\n<strong>&ndash; K&iacute;ch thước:</strong>&nbsp;<strong>W-</strong>&nbsp;<strong>Chi</strong><strong>ề</strong><strong>u r</strong><strong>ộ</strong><strong>ng | L- Chi</strong><strong>ề</strong><strong>u d</strong><strong>&agrave;</strong><strong>i | D-</strong><strong>&nbsp;Đ</strong><strong>ườ</strong><strong>ng k</strong><strong>&iacute;</strong><strong>nh | H- Chi</strong><strong>ề</strong><strong>u cao</strong></p>\r\n\r\n<p><strong><em>*&nbsp;D 27 x H 27 cm &ndash; (700,000 VNĐ)<br />\r\n*&nbsp;D 37 x H 37 cm &ndash; (1,200,000 VNĐ)<br />\r\n* D 47 x H 47 cm &ndash; (2,163,000 VNĐ)</em></strong></p>', 700000, '2022-12-19 00:36:32', '2022-12-19 00:36:32'),
(7, 'Giá thể TN.1 trồng rau sạch (tải 10kg)', 'Đất sạch - Phân sạch', '1671460681.jpg', '<p>Gi&aacute; thể TN.1 l&agrave; sản phẩm đất trồng rau sạch an to&agrave;n của viện Thổ nhưỡng n&ocirc;ng h&oacute;a, c&oacute; th&agrave;nh phần đất tự nhi&ecirc;n, chất giữ ẩm v&agrave; c&aacute;c dưỡng chất c&acirc;n bằng cho c&acirc;y trồng</p>', '<p>Gi&aacute; thể trồng rau TN.1 l&agrave; sản phẩm của Viện Thổ Nhưỡng N&ocirc;ng H&oacute;a, l&agrave; loại đất trồng c&oacute; dinh dưỡng c&acirc;n bằng, độ PH tối ưu cho hầu hết c&aacute;c loại rau sạch v&agrave; c&acirc;y trồng, sản phẩm được xử l&yacute; tốt loại trừ c&aacute;c mầm bệnh g&acirc;y hại, rất tốt cho c&acirc;y trồng.</p>\r\n\r\n<h3>Th&agrave;nh phần dinh dưỡng gi&aacute; thể TN.1</h3>\r\n\r\n<p>- Hữu cơ chất lượng cao</p>\r\n\r\n<p>- Chất giữ ẩm cho đất</p>\r\n\r\n<p>- C&aacute;c kho&aacute;ng chất đa, trung, vi lượng</p>\r\n\r\n<h3>C&ocirc;ng dụng gi&aacute; thể TN.1</h3>\r\n\r\n<p>Gi&aacute; thể TN.1 cung cấp dầy đủ chất dinh dưỡng cho c&acirc;y trồng từ 6 th&aacute;ng đến 1 năm hoặc rau từ 2-5 lứa t&ugrave;y loại. Với đặc t&iacute;nh nổi bật về khả năng giữ ẩm tho&aacute;ng kh&iacute;, gi&aacute; thể TN.1 gi&uacute;p c&acirc;y trồng xanh tốt v&agrave; c&oacute; bộ rễ khỏe mạnh.</p>\r\n\r\n<p>Hướng dẫn sử dụng gi&aacute; thể TN.1</p>\r\n\r\n<p>Đổ 1 lượng đủ gi&aacute; thể v&agrave;o khay chậu v&agrave; kh&ocirc;ng cần trộn th&ecirc;m đất hoặc ph&acirc;n b&oacute;n n&agrave;o kh&aacute;c. Ấn nhẹ trước khi trồng v&agrave; giữ cho đất đủ ẩm để c&acirc;y trồng ph&aacute;t triển tốt nhất.</p>\r\n\r\n<h3>Nh&agrave; sản xuất:</h3>\r\n\r\n<p>Gi&aacute; thể TN.1 sản xuất tại Trung t&acirc;m nghi&ecirc;n cứu ph&acirc;n b&oacute;n v&agrave; dinh dưỡng c&acirc;y trồng - Viện thổ nhưỡng N&ocirc;ng H&oacute;a.</p>\r\n\r\n<h3>Quy c&aacute;ch đ&oacute;ng g&oacute;i</h3>\r\n\r\n<p><strong>Gi&aacute; thể TN.1&nbsp;</strong>đ&oacute;ng g&oacute;i trong bao b&igrave; 10Kg, c&oacute; thể t&iacute;ch khoảng 18dm3</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Giá thể TN.1\" src=\"https://trongraudothi.com/Uploads/rausach/rausachimages/thonhuong11.jpg\" /></p>\r\n\r\n<p>Mặt trước bao b&igrave; - Nh&atilde;n hiệu, nguồn gốc xuất xứ</p>\r\n\r\n<p><img alt=\"Giá thể TN.1-2\" src=\"https://trongraudothi.com/Uploads/rausach/rausachimages/thonhuong2.jpg\" /></p>\r\n\r\n<p>Mặt sau: Hướng dẫn sử dụng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>C&aacute;c ưu nhược điểm của gi&aacute; thể TN.1</h3>\r\n\r\n<p>Gi&aacute; thể TN.1 được sản xuất từ đất tự nhi&ecirc;n c&ugrave;ng c&aacute;c chất hữu cơ sạch, c&acirc;n bằng dinh dưỡng v&agrave; độ PH tối ưu gi&uacute;p cho n&oacute; ph&ugrave; hợp để trồng hầu hết c&aacute;c loại c&acirc;y trồng. Chất giữ ẩm c&ugrave;ng c&aacute;c loại trấu gi&uacute;p n&oacute; th&ocirc;ng tho&aacute;ng v&agrave; giữ ẩm tốt hơn, ph&ugrave; hợp để trồng rau sạch, gi&uacute;p hương vị rau đậm đ&agrave; nhờ c&oacute; th&agrave;nh phần chủ yếu từ đất sạch tự nhi&ecirc;n.</p>\r\n\r\n<p><img alt=\"Đất thổ nhưỡng nông hóa\" src=\"https://trongraudothi.com/Uploads/rausach/rausachimages/1(5).jpg\" /></p>\r\n\r\n<p>M&agrave;u sắc- bề mặt cảm quang của gi&aacute; thể TN.1</p>\r\n\r\n<p><img alt=\"Giá thể Tribat\" src=\"https://trongraudothi.com/Uploads/rausach/rausachimages/2(6).jpg\" /></p>\r\n\r\n<p>So với đất sạch hữu cơ của Tribat</p>\r\n\r\n<p><strong>So s&aacute;nh rau trồng tr&ecirc;n gi&aacute; thể TN.1 v&agrave; đất sạch Tribat:</strong></p>\r\n\r\n<p>Hương vị rau trồng tr&ecirc;n gi&aacute; thể TN.1 đặc trưng hơn, đơn cử như rau muống, x&agrave; l&aacute;ch c&oacute; vị ch&aacute;t hơn, rau cải sẽ cay hơn. Ở chiều hướng ngược lại, rau trồng tr&ecirc;n gi&aacute; thể Tribat do thời gian ph&aacute;t triển nhanh n&ecirc;n gi&ograve;n v&agrave; ngọt hơn.</p>\r\n\r\n<p><strong>Cảm quan đ&aacute;nh gi&aacute; của trongraudothi.com</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i thấy rằng trồng rau tr&ecirc;n gi&aacute; thể TN.1 cho c&acirc;y ph&aacute;t triển khỏe mạnh, c&oacute; hương vị đậm đ&agrave;. Nguồn dinh dưỡng hữu cơ giải ph&oacute;ng chậm gi&uacute;p cho rau ph&aacute;t triển khỏe mạnh v&agrave; an to&agrave;n cho sức khỏe. M&agrave;u sắc l&aacute; đẹp cho thấy c&acirc;y kh&ocirc;ng bị dư thừa hay thiếu dinh dưỡng.</p>\r\n\r\n<p>Gi&aacute; thể TN.1 cho thời gian sử dụng khoảng 1 năm, sau đ&oacute; bạn c&oacute; thể trộn th&ecirc;m c&aacute;c loại ph&acirc;n b&oacute;n hữu cơ, ph&acirc;n tr&ugrave;n quế hoặc ph&acirc;n b&oacute;n vi sinh để cải tạo ch&uacute;ng</p>', 38000, '2022-12-19 00:38:01', '2022-12-19 00:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` bigint(20) UNSIGNED NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `tieude`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '\'Nông dân có thể giàu lên từ giống lúa chống bệnh, năng suất cao\'', '<p>C&aacute;c nh&agrave; khoa học h&agrave;ng đầu thế giới đến Việt Nam c&ugrave;ng b&agrave;n về những giống l&uacute;a gi&uacute;p người d&acirc;n kh&ocirc;ng phải lo mất m&ugrave;a v&igrave; ngập &uacute;ng hay s&acirc;u bệnh, thậm ch&iacute; c&oacute; thể l&agrave;m gi&agrave;u nhờ c&ocirc;ng nghệ canh t&aacute;c mới.</p>\r\n\r\n<p>Th&ocirc;ng tin được chia sẻ tại tọa đ&agrave;m &quot;N&ocirc;ng nghiệp bền vững trong b&igrave;nh thường mới&quot;, diễn ra s&aacute;ng 19/12 tại H&agrave; Nội. Sự kiện l&agrave; điểm hẹn kết nối giữa cộng đồng khoa học c&ocirc;ng nghệ Việt Nam với c&aacute;c nh&agrave; khoa học h&agrave;ng đầu quốc tế trước thềm lễ trao giải Khoa học c&ocirc;ng nghệ VinFuture.</p>\r\n\r\n<p>Ph&aacute;t biểu khai mạc, Thứ trưởng Khoa học v&agrave; C&ocirc;ng nghệ B&ugrave;i Thế Duy đ&aacute;nh gi&aacute; cao việc c&aacute;c nh&agrave; khoa học thế giới hội tụ tại Việt Nam c&ugrave;ng thảo luận về những chủ đề khoa học thiết thực, c&oacute; thể tạo n&ecirc;n cuộc c&aacute;ch mạng trong cuộc sống của con người.</p>\r\n\r\n<p>Theo thứ trưởng Duy, để th&uacute;c đẩy kinh tế v&agrave; gi&uacute;p người n&ocirc;ng d&acirc;n c&oacute; chất lượng cuộc sống tốt hơn trong bối cảnh biến đổi kh&iacute; hậu đ&ograve;i hỏi c&aacute;c quốc gia phải c&oacute; hướng đi mới, giải ph&aacute;p mới đột ph&aacute; v&agrave; &quot;chỉ c&oacute; khoa học c&ocirc;ng nghệ mới giải quyết được&quot;.</p>\r\n\r\n<p><img alt=\"Thứ trưởng Bùi Thế Duy phát biểu khai mạc tại toạ đàm.\" src=\"https://i1-vnexpress.vnecdn.net/2022/12/19/hun-8518-1-jpeg-2264-167143197-6494-8397-1671435483.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=dpyE6d0W1764nFerzNv5Hg\" /></p>\r\n\r\n<p>Thứ trưởng B&ugrave;i Thế Duy ph&aacute;t biểu khai mạc tại toạ đ&agrave;m. Ảnh:&nbsp;<em>Phương Linh</em></p>\r\n\r\n<p>&Ocirc;ng cho biết, tại Việt Nam, khoa học c&ocirc;ng nghệ v&agrave; đổi mới s&aacute;ng tạo l&agrave; một trong những động lực quan trọng đưa Việt Nam trở th&agrave;nh một trong 15 quốc gia đứng đầu thế giới về xuất khẩu n&ocirc;ng sản. Ước t&iacute;nh, khoa học v&agrave; c&ocirc;ng nghệ đ&oacute;ng g&oacute;p tr&ecirc;n 30% gi&aacute; trị gia tăng trong lĩnh vực n&ocirc;ng nghiệp v&agrave; khoảng 38% gi&aacute; trị gia tăng trong sản xuất giống c&acirc;y trồng, vật nu&ocirc;i. V&igrave; vậy &ocirc;ng kỳ vọng những s&aacute;ng kiến mang t&iacute;nh đột ph&aacute;, từ giải thưởng VinFuture v&agrave; chuỗi sự kiện c&oacute; thể kết nối cộng đồng khoa học thế giới v&agrave; Việt Nam, th&uacute;c đẩy khoa học phụng sự nh&acirc;n loại.</p>\r\n\r\n<p>Theo GS Pamela Ronald, Khoa bệnh học thực vật v&agrave; Trung t&acirc;m bộ gene tại Đại học California, Davis, hiện đ&atilde; c&oacute; c&aacute;c giống mới được cải thiện t&iacute;nh trạng để c&oacute; năng suất cao v&agrave; chống chịu s&acirc;u bệnh. Trong đ&oacute; ph&aacute;t minh giống l&uacute;a mang gene chịu ngập sub1 đang được hơn 6 triệu n&ocirc;ng d&acirc;n ở Ấn Độ, Bangladesh v&agrave; Nepal đưa v&agrave;o trồng trọt. Dự &aacute;n do nh&agrave; khoa học David Mackill v&agrave; cộng sự tại Viện Nghi&ecirc;n cứu L&uacute;a gạo Quốc tế (IRRI) thực hiện, tạo được giống l&uacute;a c&oacute; khả năng chịu ngập trong khoảng gian 2 tuần, trong khi giống kh&aacute;c chỉ chịu 3 ng&agrave;y.</p>\r\n\r\n<p>C&aacute;c nh&agrave; nghi&ecirc;n cứu đ&atilde; sử dụng những kh&aacute;m ph&aacute; cơ bản về gene l&uacute;a sub1 li&ecirc;n quan tới việc điều h&ograve;a phản ứng miễn dịch ở l&uacute;a trong t&igrave;nh trạng ngập nước v&agrave; đ&atilde; tạo ra c&aacute;c giống l&uacute;a biến đổi gene c&oacute; t&iacute;nh chịu ngập vượt trội, đồng thời kh&ocirc;ng ảnh hưởng đến sự ph&aacute;t triển, năng suất hay chất lượng hạt gạo. &quot;Giống c&oacute; gene sub1 c&oacute; sản lượng cao hơn 45% so với th&ocirc;ng thường, khi ngập lụt xảy ra m&ugrave;a m&agrave;ng kh&ocirc;ng lo bị mất trắng, mang lại lợi &iacute;ch cho n&ocirc;ng d&acirc;n&quot;, GS Ronald cho biết.</p>\r\n\r\n<p><img alt=\"GS Pamela Ronald.\" src=\"https://i1-vnexpress.vnecdn.net/2022/12/19/hun-8559-1-jpeg-1115-167143197-3796-8201-1671435483.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=qCj2lQ5asnstRiTL6D6aYg\" /></p>\r\n\r\n<p>GS Pamela Ronald chia sẻ về c&aacute;c giống l&uacute;a chống chịu s&acirc;u bệnh v&agrave; ngập &uacute;ng. Ảnh:&nbsp;<em>Phương Linh</em></p>\r\n\r\n<p>TS Van Schepler-Luu, Viện Nghi&ecirc;n cứu L&uacute;a Quốc tế (IRRI), gợi &yacute; ph&aacute;t triển giống l&uacute;a kh&aacute;ng bệnh bằng c&aacute;ch điều chỉnh hệ gene nhằm can thiệp gene trong c&acirc;y trồng c&oacute; khả năng chống chịu bệnh tật. Theo b&agrave;, c&ocirc;ng nghệ n&agrave;y được ứng dụng cải thiện hiệu suất trồng trọt, như kết hợp giống c&acirc;y c&ugrave;ng loại để c&oacute; lo&agrave;i mới cải tiến, hay lai gh&eacute;p với hai giống gần nhau để c&oacute; d&ograve;ng mới hoặc l&agrave;m biến đổi gene.</p>\r\n\r\n<p>B&agrave; cho rằng, trong tương lai sẽ cải tiến cả những giống bản địa như d&ugrave;ng tia ph&oacute;ng xạ, v&agrave; c&aacute;c h&igrave;nh thức biến dị qua h&oacute;a học vật l&yacute; kh&aacute;c v&agrave; lai tạo cấy g&eacute;p để chuyển gene c&oacute; lợi từ thực vật n&agrave;y sang thực vật kh&aacute;c, hoặc hiệu chỉnh hệ gene để tạo ra mang ADN bản địa. Theo Van, c&aacute;c m&ocirc; h&igrave;nh kh&aacute;ng bệnh hiệu quả bằng sử dụng c&ocirc;ng nghệ gi&uacute;p x&acirc;y dựng mạng lưới nhằm dự b&aacute;o v&agrave; điều chỉnh m&ocirc; h&igrave;nh canh t&aacute;c ph&ugrave; hợp.</p>\r\n\r\n<p>Theo đ&oacute; &quot;cần x&acirc;y dựng c&aacute;c quy chế cho ph&eacute;p c&acirc;y trồng biến đổi gene để dễ d&agrave;ng sử dụng c&aacute;c loại c&acirc;y c&oacute; năng suất cao, khả năng chống chịu tốt n&agrave;y&quot; b&agrave; n&oacute;i. Ban đầu, c&oacute; thể chuyển giao m&ocirc; h&igrave;nh nhỏ, c&aacute;c hộ gia đ&igrave;nh rồi mở rộng hơn.</p>\r\n\r\n<p><img alt=\"TS Van Schepler-Luu chia sẻ các giải pháp tại sự kiện. Ảnh: Phương Linh\" src=\"https://i1-vnexpress.vnecdn.net/2022/12/19/hun-8586-jpg-1671434610-167143-6893-3206-1671435483.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ORhi5T6yrc6obfTphmtL6A\" /></p>\r\n\r\n<p>TS Van Schepler-Luu chia sẻ c&aacute;c giải ph&aacute;p tại sự kiện. Ảnh:&nbsp;<em>Phương Linh</em></p>\r\n\r\n<p><strong>Tương lai của n&ocirc;ng nghiệp ch&iacute;nh x&aacute;c</strong></p>\r\n\r\n<p>Ngo&agrave;i việc tạo ra những giống l&uacute;a c&oacute; t&iacute;nh trạng tốt, gạo ngon, chống chịu s&acirc;u bệnh, ngập &uacute;ng v&agrave; năng suất cao, GS Josse De Baerdemaeker, KU Leuven, Bỉ đề xuất giải ph&aacute;p ứng dụng c&ocirc;ng nghệ n&ocirc;ng nghiệp ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>&Ocirc;ng gợi &yacute; ứng dụng tr&iacute; tuệ nh&acirc;n tạo (AI) trong n&ocirc;ng nghiệp, c&oacute; thể sử dụng cảm biến thu thập dữ liệu từ vệ tinh, thiết bị bay kh&ocirc;ng người l&aacute;i hay gắn tr&ecirc;n đồng ruộng để c&oacute; dữ liệu ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Theo GS Josse, m&ocirc; h&igrave;nh gi&uacute;p người d&acirc;n quản l&yacute; c&aacute;c dữ liệu về đất, giống c&acirc;y ph&ugrave; hợp với kh&iacute; hậu địa phương, c&oacute; thể đưa ra m&ocirc; h&igrave;nh ho&aacute; theo kh&ocirc;ng gian thời gian để c&oacute; phương &aacute;n xử l&yacute; trước những khủng hoảng.</p>\r\n\r\n<p><img alt=\"GS Josse De Baerdemaeker.\" src=\"https://i1-vnexpress.vnecdn.net/2022/12/19/hun-8635-1-jpeg-8307-167143197-2435-6704-1671435483.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=FBFX9YUA7DGkdof2G1FoQg\" /></p>\r\n\r\n<p>GS Josse De Baerdemaeker ph&aacute;t biểu tại sự kiện. Ảnh:&nbsp;<em>Phương Linh</em></p>\r\n\r\n<p>GS Josse kỳ vọng người d&acirc;n kh&ocirc;ng chỉ ứng dụng c&aacute;ch canh t&aacute;c mới m&agrave; họ c&oacute; thể trở th&agrave;nh những người thu thập, cung cấp, dữ liệu từ đất, sự sinh trưởng c&acirc;y trồng, bệnh hại, đa dạng sinh học theo thời gian thực. Từ dữ liệu n&agrave;y c&oacute; thể x&aacute;c định đ&acirc;u l&agrave; tập qu&aacute;n tốt, đ&acirc;u l&agrave; giống c&acirc;y n&ecirc;n trồng năm sau. &quot;Đ&acirc;y l&agrave; c&aacute;ch để c&oacute; nền n&ocirc;ng nghiệp th&ocirc;ng minh ch&iacute;nh x&aacute;c&quot;, nguy&ecirc;n Chủ tịch EurAgEng, Hiệp hội N&ocirc;ng nghiệp kỹ thuật ch&acirc;u &Acirc;u n&oacute;i.</p>\r\n\r\n<p>C&aacute;c chuy&ecirc;n gia cho rằng m&ocirc; h&igrave;nh thực tế gi&uacute;p người d&acirc;n học v&agrave; l&agrave;m theo. Theo TS Van, c&aacute;c nh&agrave; khoa học hiểu v&agrave; t&igrave;m khả năng v&agrave; năng lực chống chịu của c&acirc;y trồng, th&ocirc;ng qua điều chỉnh bộ gene mới, dự đo&aacute;n khả năng xảy ra dịch bệnh mới, từ đ&oacute; mới chuyển m&ocirc; h&igrave;nh canh t&aacute;c cho người n&ocirc;ng d&acirc;n.</p>\r\n\r\n<p>C&ograve;n GS Jennifer Tour Chayes, Đại học California, Berkeley gợi &yacute; tạo ra nền tảng, ở đ&oacute; AI l&agrave; nh&acirc;n tố ph&iacute;a sau để thu thập dữ liệu. Song &ocirc;ng nhấn mạnh nền tảng &quot;&iacute;t code&quot;, th&acirc;n thiện v&agrave; dễ d&ugrave;ng để người d&acirc;n c&oacute; thể tiếp cận được.</p>\r\n\r\n<p>Tại sự kiện, sau khi lắng nghe c&aacute;c gợi &yacute;, từ dưới hội trường 1 startup đặt c&acirc;u hỏi về việc l&agrave;m thế n&agrave;o để ph&aacute;t triển được m&ocirc; h&igrave;nh tr&iacute; tuệ nh&acirc;n tạo v&agrave; IoT v&agrave;o thực tế. Theo vị đại biểu n&agrave;y, chỉnh sửa bộ gene v&agrave; canh t&aacute;c ch&iacute;nh x&aacute;c (cung cấp đủ lượng dinh dưỡng v&agrave; nước) l&agrave; tương lai của ng&agrave;nh n&ocirc;ng nghiệp nhưng ở Việt Nam việc canh t&aacute;c th&ocirc; sơ vẫn nhiều. Để ứng dụng v&agrave;o thực tế th&igrave; rủi ro cao v&igrave; người d&acirc;n đang canh t&aacute;c thủ c&ocirc;ng. L&agrave;m thế n&agrave;o khi chưa c&oacute; một nền hạ tầng đủ ti&ecirc;n tiến? Muốn thực h&agrave;nh n&ocirc;ng nghiệp ch&iacute;nh x&aacute;c th&igrave; đ&acirc;u l&agrave; t&iacute;n hiệu tốt để những người cung cấp giải ph&aacute;p c&oacute; thể th&acirc;m nhập v&agrave;o thị trường.</p>\r\n\r\n<p>Trả lời c&acirc;u hỏi n&agrave;y, GS Josse De Baerdemaker, Ku Leuven cho rằng, những người l&agrave;m c&ocirc;ng nghệ cần chỉ cho người d&acirc;n thấy lợi &iacute;ch v&agrave; c&aacute;ch l&agrave;m. C&ograve;n việc tiền ở đ&acirc;u th&igrave; ch&iacute;nh phủ cũng cần c&oacute; hoạt động khuyến n&ocirc;ng hiệu quả. Tuy nhi&ecirc;n nếu vấn đề đầu ti&ecirc;n l&agrave; l&agrave;m thế n&agrave;o để người d&acirc;n l&agrave;m theo?, &ocirc;ng khuy&ecirc;n c&oacute; m&ocirc; h&igrave;nh hiệu quả cụ thể, người d&acirc;n sẽ &aacute;p dụng chứ kh&ocirc;ng đơn thuần chỉ giới thiệu c&ocirc;ng nghệ. &quot;Nếu chỉ ra được những người l&agrave;m trước, c&oacute; thực tiễn v&agrave; thu nhập tăng l&ecirc;n, khi đ&oacute; chắc chắn sẽ c&oacute; nhiều người học l&agrave;m theo&quot;, &ocirc;ng n&oacute;i.</p>\r\n\r\n<p>GS Josse n&oacute;i th&ecirc;m, người n&ocirc;ng d&acirc;n ở nước thu nhập thấp ho&agrave;n to&agrave;n c&oacute; thể tiếp cận được c&ocirc;ng nghệ. Dẫn v&iacute; dụ n&ocirc;ng d&acirc;n Bỉ c&oacute; c&aacute;ch truyền thống canh t&aacute;c l&agrave; thuyết phục nhau để c&ugrave;ng d&ugrave;ng một hệ thống t&iacute;nh to&aacute;n, c&aacute;ch quan s&aacute;t theo d&otilde;i. Người d&acirc;n tương t&aacute;c rất tốt, họ quan s&aacute;t đồng ruộng v&agrave; hiểu r&otilde; nếu d&ugrave;ng thuốc trừ s&acirc;u ảnh hưởng nghi&ecirc;m trọng tới đất đai thổ nhưỡng họ sẽ kh&ocirc;ng d&ugrave;ng nữa. &quot;Họ thống nhất c&aacute;ch l&agrave;m trong cả khu vực rộng lớn&quot;, &ocirc;ng gợi mở.</p>\r\n\r\n<p>Tại toạ đ&agrave;m, c&aacute;c nh&agrave; khoa học cũng chia sẻ phương ph&aacute;p v&agrave; kinh nghiệm đối với Việt Nam, trong đ&oacute; c&oacute; việc ph&aacute;t triển loại giống l&uacute;a c&oacute; gene chịu ngập vẫn cho năng suất cao. GS Pamela Ronald cho hay, ngo&agrave;i gene chịu ngập c&ograve;n c&oacute; gene cao sản v&agrave; kh&aacute;ng bệnh, c&aacute;c nh&agrave; nghi&ecirc;n cứu cần kết hợp c&aacute;c loại gene n&agrave;y lại với nhau để c&oacute; giống l&uacute;a mới nhưng vẫn giữ được c&aacute;c ưu điểm của giống l&uacute;a bản địa. B&agrave; cho hay đ&atilde; tới thực nghiệm tại c&aacute;nh đồng ở Việt Nam, Bangladesh, sẽ tiếp tục kết hợp với dữ liệu v&agrave; c&aacute;c chuy&ecirc;n gia c&ugrave;ng hợp t&aacute;c giải quyết c&aacute;c vấn đề.</p>', '2022-12-19 01:00:47', '2022-12-19 01:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `name`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'admin', '$2a$12$aKlRhd8oOJmbf9AoWOtRae60xoHGauAJSYQWty.qk5MHzJX0okBGS', '1671470944.webp', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`id_cuahang`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id_daily`);

--
-- Indexes for table `kythuat`
--
ALTER TABLE `kythuat`
  ADD PRIMARY KEY (`id_kythuat`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `id_cuahang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id_daily` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kythuat`
--
ALTER TABLE `kythuat`
  MODIFY `id_kythuat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
