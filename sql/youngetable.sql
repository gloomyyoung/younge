-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-14 11:49
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `younge`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `youngetable`
--

CREATE TABLE `youngetable` (
  `idx` int(11) NOT NULL COMMENT '고유번호',
  `id` varchar(15) NOT NULL COMMENT '아이디',
  `name` varchar(25) NOT NULL COMMENT '이름',
  `pass` varchar(30) NOT NULL COMMENT '비밀번호',
  `phone` varchar(13) NOT NULL COMMENT '휴대폰 번호',
  `age` int(11) DEFAULT NULL COMMENT '나이'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `youngetable`
--
ALTER TABLE `youngetable`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `youngetable`
--
ALTER TABLE `youngetable`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
