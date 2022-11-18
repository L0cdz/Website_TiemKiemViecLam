DROP DATABASE IF EXISTS `job_portal`;
CREATE DATABASE IF NOT EXISTS `job_portal`;
USE `job_portal`;

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE `Admin`
(
  id INT(10) NOT NULL,
  username VARCHAR(20) DEFAULT NULL,
  password VARCHAR(20) DEFAULT NULL,
  name VARCHAR(50) DEFAULT NULL
);
INSERT INTO `Admin` VALUES
('1','admin','123','Alter rubber'),
('2','admin2','123','Donald Trump'),
('3','admin3','123','Elon Musk'),
('4','admin4','123','MySQL');

DROP TABLE IF EXISTS `Company`;
CREATE TABLE `Company`
(
  id INT(10) NOT NULL,
  username VARCHAR(20) DEFAULT NULL,
  password VARCHAR(20) DEFAULT NULL,
  company_name VARCHAR(50) DEFAULT NULL,
  phone_number VARCHAR(10) DEFAULT NULL,
  company_email VARCHAR(50) DEFAULT NULL,
  role VARCHAR(10) DEFAULT NULL,
  admin_id INT(10) NOT NULL 
);

INSERT INTO `Company` VALUES
(1111,'Company 1','user','123','023124123','Company1@gmail.com','comp',1),
(2222,'Company 2','company2','123','033124123','Company2@gmail.com','comp',2),
(3333,'Company 3','company3','123','043124123','Company3@gmail.com','comp',4),
(4444,'Company 4','company4','123','052124123','Company4@gmail.com','comp',3);

DROP TABLE IF EXISTS `CV`;
CREATE TABLE `CV`
(
  id INT(10) NOT NULL,
  details VARCHAR(5000) DEFAULT NULL
);
INSERT INTO `CV` VALUES
(1,'Contrary to popular belief, Lorem Ipsum is 
not simply random text. It has roots in a piece 
of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
professor at Hampden-Sydney College in Virginia'),
(2,'Contrary to popular belief, Lorem Ipsum is not 
simply random text. It has roots in a 
piece of classical Latin literature from 45 BC,
 making it over 2000 years old. Richard McClintock, 
 a Latin');

DROP TABLE IF EXISTS `Client`;
CREATE TABLE `Client`
(
  id INT NOT NULL,
  username VARCHAR(20) DEFAULT NULL,
  password VARCHAR(20) DEFAULT NULL,
  full_name VARCHAR(50) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  phone_number VARCHAR(10) DEFAULT NULL,
  cv_id INT(10) NOT NULL,
  role VARCHAR(10) DEFAULT NULL,
  admin_id INT(10) NOT NULL 
);
INSERT INTO `Client` VALUES
(111,'user','123','Employee 1','employee1@gmail.com','0123456789',1,'cli',4),
(112,'cooker129','123','Employee 2','employee2@gmail.com','0173456799',2,'cli',2),
(113,'cooker131','123','Employee 3','employee3@gmail.com','0153456789',2,'cli',2),
(114,'cooker140','123','Employee 4','employee4@gmail.com','0133456787',1,'cli',1);

DROP TABLE IF EXISTS `Job`;
CREATE TABLE `Job`
(
  job_id INT(10) NOT NULL,
  salary VARCHAR(20) NOT NULL,
  description text,
  role VARCHAR(50) DEFAULT NULL,
  job_name VARCHAR(100) DEFAULT NULL,
  skills_required VARCHAR(200) DEFAULT NULL,
  admin_id INT(10) NOT NULL
);
INSERT INTO `Job` VALUES
(222,'$4000','This job is great','Admin','Back end dev','SQL',3),
(224,'$7500','This job is great','Admin','Front end dev','HTMLL CSS JS',2),
(229,'$9000','This job require high skills','Developer','Data Engineer at Google','Python Spark',4);

DROP TABLE IF EXISTS `Post`;
CREATE TABLE `Post`
(
  post_id INT(10) NOT NULL ,
  post_date date DEFAULT NULL,
  company_id INT NOT NULL,
  job_id INT(10) NOT NULL
);
INSERT INTO `Post` VALUES
(21,'2022-11-04',1111,222),
(24,'2022-11-04',2222,224),
(27,'2022-11-04',4444,229),
(35,'2022-11-04',3333,224);

DROP TABLE IF EXISTS `Apply`;
CREATE TABLE `Apply`
(
  apply_id INT(10) NOT NULL,
  client_id INT(10) NOT NULL,
  job_id INT(10) NOT NULL,
  apply_date Date DEFAULT NULL
);
INSERT INTO `Apply` VALUES
(11,111,224,'2022-11-04'),
(22,113,229,'2022-11-04');


ALTER TABLE Admin
ADD PRIMARY KEY (id);

ALTER TABLE Company
ADD PRIMARY KEY (id),
ADD FOREIGN KEY (admin_id) REFERENCES Admin(id);

ALTER TABLE CV
ADD PRIMARY KEY (id);

ALTER TABLE Client
ADD PRIMARY KEY (id),
ADD FOREIGN KEY (admin_id) REFERENCES Admin(id),
ADD FOREIGN KEY (cv_id) REFERENCES CV(id);

ALTER TABLE Job
ADD PRIMARY KEY (job_id),
ADD FOREIGN KEY (admin_id) REFERENCES Admin(id);

ALTER TABLE Post
ADD PRIMARY KEY (post_id),
ADD FOREIGN KEY (company_id) REFERENCES Company(id),
ADD FOREIGN KEY (job_id) REFERENCES Job(job_id);

ALTER TABLE Apply
ADD PRIMARY KEY (apply_id),
ADD FOREIGN KEY (client_id) REFERENCES Client(id),
ADD FOREIGN KEY (job_id) REFERENCES Job(job_id);