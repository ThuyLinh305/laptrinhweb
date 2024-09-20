-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `OnTap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DocGia`
--

CREATE TABLE DocGia (
    MaDocGia INT PRIMARY KEY,
    HoTen NVARCHAR(100),
    DonViCongTac NVARCHAR(100),
    TenSachMuon NVARCHAR(100),
    SoLuong INT,
    GiaTien DECIMAL(10, 2),
    NhaXuatBan NVARCHAR(100),
    NamXuatBan INT
);
--
-- Đang đổ dữ liệu cho bảng `DocGia`
--

INSERT INTO DocGia (MaDocGia, HoTen, DonViCongTac, TenSachMuon, SoLuong, GiaTien, NhaXuatBan, NamXuatBan)
VALUES
(1, 'Nguyen Van A', 'Trường Đại Học A', 'Lập trình C++', 2, 150000, 'NXB Giáo Dục', 2018),
(2, 'Tran Thi B', 'Trường Đại Học B', 'Cơ sở dữ liệu', 1, 200000, 'NXB Khoa Học', 2020),
(3, 'Le Van C', 'Công ty Phần Mềm C', 'Lập trình Java', 3, 180000, 'NXB Công Nghệ', 2019),
(4, 'Pham Thi D', 'Công ty Điện Tử D', 'Thiết kế hệ thống', 1, 250000, 'NXB Kỹ Thuật', 2021),
(5, 'Hoang Van E', 'Viện Nghiên Cứu E', 'Phân tích dữ liệu', 2, 300000, 'NXB Khoa Học', 2022);


--
-- Chỉ mục cho các bảng đã đổ
--

-- Chỉ mục cho bảng `DocGia`
--
ALTER TABLE `DocGia`
  ADD PRIMARY KEY (`MaDocGia`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
