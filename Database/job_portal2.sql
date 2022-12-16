DROP DATABASE IF EXISTS `job_portal`;
CREATE DATABASE IF NOT EXISTS `job_portal`;
USE `job_portal`;

-- --------------------------------------------------------

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
  `company_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `apply`
--

INSERT INTO `apply` (`apply_id`, `company_id`, `client_id`, `job_id`, `apply_date`) VALUES
(11, 1000, 5000, 222, '2022-11-04'),
(22, 1002, 5001, 225, '2022-11-04');

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
(5000, 4, 'Employee 1', 'employee1@gmail.com', '0123456789', 1),
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
(1000, 2, 'Company 1', '023124123', 'Company1@gmail.com', 'https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_facebook-256.png'),
(1001, 3, 'Company 2', '033124323', 'Company2@gmail.com', ''),
(1002, 12, 'Company 2', '033122123', 'Company3@gmail.com', ''),
(1003, 8, 'Company 2', '033144123', 'Company4@gmail.com', ''),
(1004, 13, 'Company 2', '033129123', 'Company5@gmail.com', '');
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
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`job_id`, `company_id`, `emp_id`, `admin_id`, `salary`, `description`, `role`, `job_name`, `skills_required`, `address`) VALUES
(221, 1002,5000,100, '$3500', 'Analyze functional requirements to translate into application design using established design methodologies and guidelines.\r\nDevelop the software conforming to design, program guidelines, and programming best practices.\r\nInvestigate all reported problems/errors and implement fixes for the Issues/problems so that the system can operate correctly and efficiently.', 'Senior', 'Java Developer', 'Java 8+,Tomcat 8,Spring Boot, Spring Security, Spring Batch,JSP (Java server page), JQuery', 'AP Tower, 518B Điện Biên Phủ, Phường 21, Quận Bình Thạnh, Thành phố Hồ Chí Minh'),
(222, 1000,5001,101, '$4000', 'Talent Success client is a Product company (e-sport industry). The company has extensive top-level, global technology experience. Its products are becoming more and more popular and favored by many players with its outstanding simulation technologies & real-play experience. Now the Company is expanding its business to Vietnam and looking for many IT Talents to join the corporation.', 'Senior', 'Java Developer', 'Java, Spring Boot, Hibernate/JPA, Kafka, PostgreSQL/MySQL', 'F-Town 3, Võ Chí Công, Phường Long Thạnh Mỹ, Thành'),
(223, 1003,5002,102, '$7500', 'Smilegate is a Mega Value Innovator in Entertainment headquartered in Korea, since its foundation in 2002, Smilegate has continuously strived for happier lives and a more hopeful society by developing and providing quality games and content. Smilegate operates businesses in areas of game development and services, investments, and social contributions; develops and discovers various games and cultural content; and provides them as global services by increasing their value.', 'Team Lead', 'Java Back-End', 'RDB (MySQL), NoSQL (mongoDB), Redis, and Kafka', '15b/8 Le Thanh Ton Street, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh'),
(224, 1004,5004,103,'$1200', 'We are looking for 1 technical leader (with at least 2 years of experience in a similar position), to be responsible for software design, coding, and testing of PC web applications in various business systems.', 'Technical Leader', 'PHP/ Java/ Python', 'NodeJS, C#, C/C++, HTML5/CSS3, Bootstrap, jQuery', 'Lầu 5, Tòa nhà Scetpa, 19A Cộng Hòa, Phường 12, Quận Tân Bình, Thành phố Hồ Chí Minh'),
(225, 1001,5003,104,'$1000', 'Work in cross-functional teams with product managers, UX designers, and QA engineers to ship software on-quality and on time.\r\nHelp level up the team; share knowledge, conduct code, and design reviews; drive code quality and process improvement initiatives.', 'Senior', 'Back-end Engineer', 'Solid Computer Science fundamentals, excellent problem-solving skills.', 'Coworking Space, Thành phố Đà Nẵng');
-- (229, 1000,5000,100,'$9000', 'A member of Data Lake team, responsible to build, develop and maintain the data pipeline of our strategic Big Data platform, Data Lake serving for management needs, business operations of the bank and comply with Data Governance.', 'Mid/Senior', 'Data Engineer', 'Python, R, Java, Scalar, Spark', '442 Nguyễn Thị Minh Khai, Phường 05, Quận 3, Thành phố Hồ Chí Minh'),
-- (230, 1001,5003,100, '$2000', 'Good verbal and written communication in English is required\r\n2+ years of professional experience in international software projects (flexible depending on how fast your learning and technical developing capabilities are)\r\nDegree in engineering or natural sciences (university or technical college)', 'Middle', 'Fullstack Developer', 'Java, ReactJS, Angular, VueJS', 'Lao Dong News Building, 198 Nguyen Thi Minh Khai, Phường Võ Thị Sáu, Quận 3, Thành phố Hồ Chí Minh'),
-- (231, 1002,5004,101, '$2500', 'Phát triển, nâng cấp các ứng dụng Mobile & Tablet app ứng dụng Android & IOS \r\nPhối hợp với bộ phận phát triển sản phẩm, thiết kế luồng nghiệp vụ người dùng; đề xuất giải pháp phát triển ứng dụng .\r\nQuản lý và hỗ trợ thành viên dự án về giải pháp kỹ thuật \r\nĐóng góp ý kiến để làm cho ứng dụng tốt hơn và dễ sử dụng hơn', 'Senior', 'Mobile Developer', 'Swift,Java Android, Kotlin, React Native/Flutter', 'Số 315 Trường Chinh, Phường Khương Trung, Quận Thanh Xuân, Thành phố Hà Nội'),
-- (232, 1002,5001,101, '$1400', 'Phát triển các sản phẩm ứng dụng trên nền tảng Android.\r\nThiết kế xây dựng và phát triển ý tưởng mới cho các ứng dụng Android.\r\nTham gia vào toàn bộ quy trình phát triển một sản phẩm ứng dụng hoàn chỉnh để đẩy sản phẩm lên store Google Play.', 'Nhân viên', 'Mobile Android Developer', 'Java, Kotlin, RxJava, Compose.', 'Lô B13, Khu đấu giá Vạn Phúc, đường Lê Văn Tám, Phường Vạn Phúc, Quận Hà Đông, Thành phố Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `joblove`
--

CREATE TABLE `joblove` (
  `id` int(11) NOT NULL,
  `job_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `job_name` varchar(100) DEFAULT NULL,
  `skills_required` text DEFAULT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'admin'),
(2, 'user', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'company'),
(3, 'company', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'company'),
(4, 'user2', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'employee'),
(5, 'user3', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'employee'),
(6, 'admin2', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'admin'),
(7, 'client', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'employee'),
(8, 'loc', '$2y$10$nYONExwH7AfSfcWSCjPrW.uSgnk6SlaEdPiPJS855nRWmsn65AH02', 'company'),
(9, 'locc', '$2y$10$NkU2m/oh4iQAjcFSn/RDHeCI7NAIiBkDpY4HWO6ng7rB7gZkhVx32', 'employee'),
(10, 'haha', '$2y$10$qORtpfB8brzPrkjo7cZw7evtTZ4VvYBLFTYMjXdjWMciqH3YhE6E6', 'employee'),
(11, 'user4', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'admin'),
(12, 'user5', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'company'),
(13, 'user6', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'company'),
(14, 'user7', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'admin'),
(15, 'user8', '$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.', 'admin');



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_date` date DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `job_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `post_date`, `company_id`, `job_id`) VALUES
(21, '2022-11-04', 1001, 222),
(24, '2022-11-04', 1002, 224),
(35, '2022-11-04', 1000, 224);

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
  ADD KEY `company_id` (`company_id`),
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
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


ALTER TABLE `job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
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
  ADD CONSTRAINT `apply_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
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