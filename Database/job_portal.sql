DROP DATABASE IF EXISTS `job_portal`;
CREATE DATABASE IF NOT EXISTS `job_portal`;
USE `job_portal`;

--
-- `job_portal`
--


--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `log_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `log_id`, `name`) VALUES
(100, 1, 'Alter rubber'),
(101, 6, 'Donald Trump'),
(102, 11, 'X'),
(103, 14, 'Y'),
(104, 15, 'Hecker');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apply`
--

CREATE TABLE `apply` (
  `apply_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `apply`
--

INSERT INTO `apply` (`apply_id`, `client_id`, `job_id`, `apply_date`) VALUES
(11, 5000, 222, '2022-11-04'),
(22, 5001, 225, '2022-11-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `log_id` int(10) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `cv_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`id`, `log_id`, `full_name`, `email`, `phone_number`, `cv_id`) VALUES
(5000, 4, 'Employee1', 'employee1@gmail.com', '0123456789', 1),
(5001, 5, 'Employee 2', 'employee2@gmail.com', '0173456791', 2),
(5002, 7, 'Employee 3', 'employee3@gmail.com', '0123456723', 1),
(5003, 9, 'Employee 4', 'employee4@gmail.com', '0133456714', 2),
(5004, 10, 'Employee 5', 'employee5@gmail.com', '0173456732', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `log_id` int(10) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `company_email` varchar(50) DEFAULT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `log_id`, `company_name`, `phone_number`, `company_email`, `icon`) VALUES
(1000, 2, 'Facebook', '023124123', 'Company1@gmail.com', 'https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_facebook-256.png'),
(1001, 3, 'Tech', '033124323', 'Company2@gmail.com', 'data:image/jpeg;base64,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'),
(1002, 12, 'Google', '033122123', 'Company3@gmail.com', 'data:image/jpeg;base64,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'),
(1003, 8, 'CodeId', '033144123', 'Company4@gmail.com', 'https://img.freepik.com/free-vector/creative-gradient-code-logo_23-2148813996.jpg?auto=format&h=200'),
(1004, 13, 'Codener', '033129123', 'Company5@gmail.com', 'https://cdn.lovesavingsgroup.com/logos/cordners.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `id` int(10) NOT NULL,
  `name` varchar(5000) DEFAULT NULL,
  `contact` text NOT NULL,
  `infor` text NOT NULL,
  `education` text NOT NULL,
  `exp` text NOT NULL,
  `skill` text NOT NULL,
  `certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`id`, `name`, `contact`, `infor`, `education`, `exp`, `skill`, `certificate`) VALUES
(1, 'CV1', 'alex@gmail.com', 'Le Kim Tan Loc', 'Đại Học Tôn Đức Thắng\r\n', 'Lập trình nhúng cho các thiết bị điện tử bằng C++ , C#\r\n', 'Tiếng Anh', 'MOS'),
(2, 'CV2', 'alex@gmail.com', 'Le Kim Tan Loc', 'Đại Học Tôn Đức Thắng\r\n', 'Lập trình PHP,HTML,CSS', 'Tiếng Anh', 'MOS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `job_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `job_name` varchar(100) DEFAULT NULL,
  `skills_required` text DEFAULT NULL,
  `address` text NOT NULL,
  `datePost` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`job_id`, `company_id`, `emp_id`, `admin_id`, `salary`, `description`, `role`, `job_name`, `skills_required`, `address`, `datePost`) VALUES
(221, 1002, 5000, 100, '$3500', 'Analyze functional requirements to translate into application design using established design methodologies and guidelines.\r\nDevelop the software conforming to design, program guidelines, and programming best practices.\r\nInvestigate all reported problems/errors and implement fixes for the Issues/problems so that the system can operate correctly and efficiently.', 'Senior', 'Java Developer', 'Java 8+,Tomcat 8,Spring Boot, Spring Security, Spring Batch,JSP (Java server page), JQuery', 'AP Tower, 518B Điện Biên Phủ, Phường 21, Quận Bình Thạnh, Thành phố Hồ Chí Minh', '2022-12-18'),
(222, 1000, 5001, 101, '$4000', 'Talent Success client is a Product company (e-sport industry). The company has extensive top-level, global technology experience. Its products are becoming more and more popular and favored by many players with its outstanding simulation technologies & real-play experience. Now the Company is expanding its business to Vietnam and looking for many IT Talents to join the corporation.', 'Senior', 'Java Developer', 'Java, Spring Boot, Hibernate/JPA, Kafka, PostgreSQL/MySQL', 'F-Town 3, Võ Chí Công, Phường Long Thạnh Mỹ, Thành', '2022-12-18'),
(223, 1003, 5002, 102, '$7500', 'Smilegate is a Mega Value Innovator in Entertainment headquartered in Korea, since its foundation in 2002, Smilegate has continuously strived for happier lives and a more hopeful society by developing and providing quality games and content. Smilegate operates businesses in areas of game development and services, investments, and social contributions; develops and discovers various games and cultural content; and provides them as global services by increasing their value.', 'Team Lead', 'Java Back-End', 'RDB (MySQL), NoSQL (mongoDB), Redis, and Kafka', '15b/8 Le Thanh Ton Street, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh', '2022-12-18'),
(224, 1004, 5004, 103, '$1200', 'We are looking for 1 technical leader (with at least 2 years of experience in a similar position), to be responsible for software design, coding, and testing of PC web applications in various business systems.', 'Technical Leader', 'PHP/ Java/ Python', 'NodeJS, C#, C/C++, HTML5/CSS3, Bootstrap, jQuery', 'Lầu 5, Tòa nhà Scetpa, 19A Cộng Hòa, Phường 12, Quận Tân Bình, Thành phố Hồ Chí Minh', '2022-12-18'),
(225, 1001, 5003, 104, '$1000', 'Work in cross-functional teams with product managers, UX designers, and QA engineers to ship software on-quality and on time.\r\nHelp level up the team; share knowledge, conduct code, and design reviews; drive code quality and process improvement initiatives.', 'Senior', 'Back-end Engineer', 'Solid Computer Science fundamentals, excellent problem-solving skills.', 'Coworking Space, Thành phố Đà Nẵng', '2022-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `joblove`
--

CREATE TABLE `joblove` (
  `job_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `job_name` varchar(100) DEFAULT NULL,
  `skills_required` text DEFAULT NULL,
  `address` text NOT NULL,
  `datePost` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `joblove`
--

INSERT INTO `joblove` (`job_id`, `company_id`, `salary`, `description`, `role`, `job_name`, `skills_required`, `address`, `datePost`) VALUES
(224, 1004, '$1200', 'We are looking for 1 technical leader (with at least 2 years of experience in a similar position), to be responsible for software design, coding, and testing of PC web applications in various business systems.', 'Technical Leader', 'PHP/ Java/ Python', 'NodeJS, C#, C/C++, HTML5/CSS3, Bootstrap, jQuery', 'Lầu 5, Tòa nhà Scetpa, 19A Cộng Hòa, Phường 12, Quận Tân Bình, Thành phố Hồ Chí Minh', '2022-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `log_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`log_id`, `username`, `password`, `account_type`) VALUES
(1, 'admin', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'admin'),
(2, 'user', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'company'),
(3, 'company', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'company'),
(4, 'user2', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'employee'),
(5, 'user3', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'employee'),
(6, 'admin2', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'admin'),
(7, 'client', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'employee'),
(8, 'loc', '$2y$10$nYONExwH7AfSfcWSCjPrW.uSgnk6SlaEdPiPJS855nRWmsn65AH02', 'company'),
(9, 'locc', '$2y$10$NkU2m/oh4iQAjcFSn/RDHeCI7NAIiBkDpY4HWO6ng7rB7gZkhVx32', 'employee'),
(10, 'haha', '$2y$10$qORtpfB8brzPrkjo7cZw7evtTZ4VvYBLFTYMjXdjWMciqH3YhE6E6', 'employee'),
(11, 'user4', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'admin'),
(12, 'user5', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'company'),
(13, 'user6', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'company'),
(14, 'user7', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'admin'),
(15, 'user8', '$2y$10$VsF9wZrM3O2.Dxu1T8gG9uapOiVTUjsq78T/IyKqcHwb1mYTgSmhG', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_date` date DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `post_date`, `company_id`, `job_id`,`status`) VALUES
(21, '2022-11-04', 1001, 222,'Approved'),
(24, '2022-11-04', 1002, 224,'Pending'),
(35, '2022-11-04', 1000, 224,'Pending');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_id` (`log_id`);

--
-- Chỉ mục cho bảng `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_id` (`log_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_id` (`log_id`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Chỉ mục cho bảng `joblove`
--
ALTER TABLE `joblove`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`,`username`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `apply`
--
ALTER TABLE `apply`
  MODIFY `apply_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5005;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;


ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`);

--
-- Các ràng buộc cho bảng `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `apply_ibfk_3` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Các ràng buộc cho bảng `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`id`);

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`);

--
-- Các ràng buộc cho bảng `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);
