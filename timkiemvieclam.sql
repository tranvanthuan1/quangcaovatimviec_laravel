-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2022 lúc 05:09 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `timkiemvieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(10) UNSIGNED NOT NULL,
  `UserAdmin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MkAdmin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`IdAdmin`, `UserAdmin`, `MkAdmin`, `AdminName`) VALUES
(2, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Vu Nguyen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidangtuyendung`
--

CREATE TABLE `baidangtuyendung` (
  `IdBaiDang` int(10) UNSIGNED NOT NULL,
  `IdNtd` int(10) UNSIGNED NOT NULL,
  `ChiTietCongViec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NganhNghe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KhuVuc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `YeuCau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyenLoi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiGian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MucLuong` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ImageBaiDang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThaiBD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baidangtuyendung`
--

INSERT INTO `baidangtuyendung` (`IdBaiDang`, `IdNtd`, `ChiTietCongViec`, `NganhNghe`, `KhuVuc`, `YeuCau`, `QuyenLoi`, `ThoiGian`, `MucLuong`, `SoLuong`, `ImageBaiDang`, `TrangThaiBD`) VALUES
(1, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Bán hàng / Kinh doanh\r\n', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(2, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Kế toán / Kiểm toán\r\n\r\n', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(3, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Kế toán / Kiểm toán', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Chưa Xác Nhận'),
(4, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Công nghệ / Thiết kế', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(5, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Điện / Điện tử / Điện lạnh', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(6, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Du lịch', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(7, 1, 'cầm mũ bảo hiểm đứng ở đường trường chinh từ 9h tối tới 2 giờ sáng', 'Bán hàng / Kinh doanh\r\n', 'hải châu\r\n', 'trẻ trung , không bệnh, trên 18 tuổi\r\n', 'được trả lương ngay trong ca làm, không gò bó, được nằm nghỉ ngơi thư giãn trong ca làm , có phòng nghỉ', 'partime', 500000, 5, 'reyna.jpg', 'Đã Xác Nhận'),
(8, 1, 'sfgfdgsdfg', 'Bán hàng / Kinh doanh', 'sdfgsdfgsdfg', 'sdfgsdfgsdfg', 'sdfgsdfgs', 'sdfgsdfgsdfg', 3432, 4, 'cypher.jpg', 'Chưa Xác Nhận'),
(9, 1, 'sfgfdgsdfg', 'Bán hàng / Kinh doanh', 'Quận Liên Chiểu', 'sdfgsdfgsdfg', 'nhiều tiền', 'Fulltime / Giờ hành chính', 3432, 1, 'cypher.jpg', '0'),
(11, 1, 'nsgfafsdgsdfgsdfg', 'Công nghệ / Thiết kế', 'Quận Sơn Trà', 'tối nghieeph đại học', 'tiêng nhiều', 'Fulltime / Giờ hành chính', 500000, 1, 'baby_girl_screaming_meme_by_redjoey1992_dcd0jrd-fullview98.jpg', 'Chưa Xác Nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_30_105814_create_admin_table', 1),
(3, '2022_03_30_113705_create_nguoitimviec_table', 1),
(4, '2022_03_30_113814_create_nhatuyendung_table', 1),
(5, '2022_03_30_114120_create_baidangtuyendung_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoitimviec`
--

CREATE TABLE `nguoitimviec` (
  `IdNguoiDung` int(10) UNSIGNED NOT NULL,
  `UserNguoiDung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MkNguoiDung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNguoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `SoDt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThaiNTV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoitimviec`
--

INSERT INTO `nguoitimviec` (`IdNguoiDung`, `UserNguoiDung`, `MkNguoiDung`, `TenNguoiDung`, `GioiTinh`, `NamSinh`, `SoDt`, `Email`, `DiaChi`, `Cv`, `TrangThaiNTV`) VALUES
(1, 'vu', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyen Quan Vu', 'Nam', 1999, '0845676574', 'admin@gmail.com', 'dfsgdsfghsdf', 'https://docs.google.com/document/d/1XyU6EFAG-Mu8rsmnh7ylG1LymyS6Oh06UZUx8t8Jh8w/edit', 'Đã Xác Nhận'),
(2, 'ha', '827ccb0eea8a706c4c34a16891f84e7b', 'lu minh ha', 'nam', 1999, '0845676574', 'lmh@gmail.com', 'dfsgdsfghsdf', 'https://docs.google.com/document/d/1XyU6EFAG-Mu8rsmnh7ylG1LymyS6Oh06UZUx8t8Jh8w/edit', 'Đã Xác Nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `IdNtd` int(10) UNSIGNED NOT NULL,
  `UserNtd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MkNtd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNtd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MST` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LinhVuc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThaiTD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatuyendung`
--

INSERT INTO `nhatuyendung` (`IdNtd`, `UserNtd`, `MkNtd`, `TenNtd`, `MST`, `SoDt`, `DiaChi`, `Email`, `LinhVuc`, `TrangThaiTD`) VALUES
(1, 'ntd', '827ccb0eea8a706c4c34a16891f84e7b', 'Công ty tránh nhiện vô hạn con bòm bịp', 'sdfgdfg', '023527345', '', 'CBB@Gmail.com', 'dịch vụ', 'Đã Xác Nhận'),
(2, 'ntd2', '827ccb0eea8a706c4c34a16891f84e7b', 'cna phao', '213452352', '023452345', '23452345', 'ntd@gmail.com', 'nhádfasdf', 'Đã Xác Nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ungtuyen`
--

CREATE TABLE `ungtuyen` (
  `IdBaiDang` int(10) UNSIGNED NOT NULL,
  `IdNguoiDung` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ungtuyen`
--

INSERT INTO `ungtuyen` (`IdBaiDang`, `IdNguoiDung`) VALUES
(4, 1),
(4, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Chỉ mục cho bảng `baidangtuyendung`
--
ALTER TABLE `baidangtuyendung`
  ADD PRIMARY KEY (`IdBaiDang`),
  ADD KEY `baidangtuyendung_idntd_foreign` (`IdNtd`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  ADD PRIMARY KEY (`IdNguoiDung`);

--
-- Chỉ mục cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`IdNtd`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `ungtuyen`
--
ALTER TABLE `ungtuyen`
  ADD KEY `IdBaiDang` (`IdBaiDang`,`IdNguoiDung`),
  ADD KEY `IdNguoiDung` (`IdNguoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baidangtuyendung`
--
ALTER TABLE `baidangtuyendung`
  MODIFY `IdBaiDang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nguoitimviec`
--
ALTER TABLE `nguoitimviec`
  MODIFY `IdNguoiDung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `IdNtd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidangtuyendung`
--
ALTER TABLE `baidangtuyendung`
  ADD CONSTRAINT `baidangtuyendung_idntd_foreign` FOREIGN KEY (`IdNtd`) REFERENCES `nhatuyendung` (`IdNtd`);

--
-- Các ràng buộc cho bảng `ungtuyen`
--
ALTER TABLE `ungtuyen`
  ADD CONSTRAINT `ungtuyen_ibfk_1` FOREIGN KEY (`IdBaiDang`) REFERENCES `baidangtuyendung` (`IdBaiDang`),
  ADD CONSTRAINT `ungtuyen_ibfk_2` FOREIGN KEY (`IdNguoiDung`) REFERENCES `nguoitimviec` (`IdNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
