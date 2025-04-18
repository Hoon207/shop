-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 25-04-14 05:15
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kdt`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `shop_data`
--

CREATE TABLE `shop_data` (
  `no` int(6) NOT NULL,
  `cate` varchar(100) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `parent` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `comment` varchar(500) NOT NULL,
  `memo` varchar(255) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `shop_data`
--

INSERT INTO `shop_data` (`no`, `cate`, `img`, `name`, `parent`, `price`, `comment`, `memo`, `datetime`) VALUES
(1, 'cate01', 'product1.jpg', '슬림 실리콘 배변매트', '100% 실리콘으로 안전, 세척이 쉬', 34900, '100% 실리콘으로 안전, 세척이 쉬운 배변판', '100% 실리콘으로 안전, 세척이 쉬운 배변판', '2025-04-11 12:31:37'),
(2, 'cate01', 'product2.jpg', '탄탄 강아지계단_오픈형 3단', '세탁없이 물로 닦아도 깨끗한 계단', 10900, '세탁없이 물로 닦아도 깨끗한 계단', '세탁없이 물로 닦아도 깨끗한 계단', '2025-04-11 12:34:40'),
(3, 'cate01', 'product3.png', '클린펫 반려동물 하우스', '스틸 소재로 냄새가 나지 않는 위생적', 129000, '스틸 소재로 냄새가 나지 않는 위생적인 하우스', '스틸 소재로 냄새가 나지 않는 위생적인 하우스', '2025-04-14 09:27:03');


INSERT INTO `shop_data` (`cate`, `img`, `name`, `parent`, `price`, `comment`, `memo`, `datetime`) VALUES
('cate02', 'product4.jpg', '슬림 실리콘 배변매트', '100% 실리콘으로 안전, 세척이 쉬', 34900, '100% 실리콘으로 안전, 세척이 쉬운 배변판', '100% 실리콘으로 안전, 세척이 쉬운 배변판', '2025-04-11 12:31:37'),
('cate02', 'product5.jpg', '탄탄 강아지계단_오픈형 3단', '세탁없이 물로 닦아도 깨끗한 계단', 10900, '세탁없이 물로 닦아도 깨끗한 계단', '세탁없이 물로 닦아도 깨끗한 계단', '2025-04-11 12:34:40'),
('cate02', 'product6.png', '클린펫 반려동물 하우스', '스틸 소재로 냄새가 나지 않는 위생적', 129000, '스틸 소재로 냄새가 나지 않는 위생적인 하우스', '스틸 소재로 냄새가 나지 않는 위생적인 하우스', '2025-04-14 09:27:03');
--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `shop_data`
--
ALTER TABLE `shop_data`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `shop_data`
--
ALTER TABLE `shop_data`
  MODIFY `no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
