DROP DATABASE IF EXISTS `job_portal`;
CREATE DATABASE IF NOT EXISTS `job_portal`;
USE `job_portal`;

DROP TABLE IF EXISTS `Login`;
CREATE TABLE `Login`
(
  log_id INT(10) NOT NULL,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(100) NOT NULL,
  account_type VARCHAR(10) NOT NULL
);
INSERT INTO `Login` VALUES
(123,'admin','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','admin'),
(213,'user','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','company'),
(223,'user1','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','company'),
(313,'user2','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client'),
(323,'user3','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client'),
(124,'admin2','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','admin'),
(333,'user4','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client');

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE `Admin`
(
  id INT(10) NOT NULL,
  log_id INT(10) NOT NULL,
  name VARCHAR(50) DEFAULT NULL
);
INSERT INTO `Admin` VALUES
('1',123,'Alter rubber'),
('2',123,'Donald Trump'),
('3',123,'Elon Musk'),
('4',123,'MySQL');

DROP TABLE IF EXISTS `Company`;
CREATE TABLE `Company`
(
  id INT(10) NOT NULL,
  log_id INT(10) NOT NULL,
  company_name VARCHAR(50) DEFAULT NULL,
  phone_number VARCHAR(10) DEFAULT NULL,
  company_email VARCHAR(50) DEFAULT NULL
);

INSERT INTO `Company` VALUES
(1111,213,'Company 1','023124123','Company1@gmail.com'),
(2222,223,'Company 2','033124123','Company2@gmail.com'),
(3333,223,'Company 3','043124123','Company3@gmail.com'),
(4444,213,'Company 4','052124123','Company4@gmail.com');

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
  id INT(10) NOT NULL,
  log_id INT(10) NOT NULL,
  full_name VARCHAR(50) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  phone_number VARCHAR(10) DEFAULT NULL,
  cv_id INT(10) NOT NULL
);
INSERT INTO `Client` VALUES
(111,323,'Employee 1','employee1@gmail.com','0123456789',1),
(112,313,'Employee 2','employee2@gmail.com','0173456799',2),
(113,333,'Employee 3','employee3@gmail.com','0153456789',2),
(114,313,'Employee 4','employee4@gmail.com','0133456787',1);

DROP TABLE IF EXISTS `Job`;
CREATE TABLE `Job`
(
  job_id INT(10) NOT NULL,
  company_id INT(10) NOT NULL,
  salary VARCHAR(20) NOT NULL,
  description text,
  role VARCHAR(50) DEFAULT NULL,
  job_name VARCHAR(100) DEFAULT NULL,
  skills_required VARCHAR(200) DEFAULT NULL
);
INSERT INTO `Job` VALUES
(222,1111,'$4000','This job is great','Admin','Back end dev','SQL'),
(224,3333,'$7500','This job is great','Admin','Front end dev','HTMLL CSS JS'),
(229,4444,'$9000','This job require high skills','Developer','Data Engineer at Google','Apache Spark');

DROP TABLE IF EXISTS `Post`;
CREATE TABLE `Post`
(
  post_id INT(10) NOT NULL,
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
  company_id INT(10) NOT NULL,
  client_id INT(10) NOT NULL,
  job_id INT(10) NOT NULL,
  apply_date Date DEFAULT NULL
);
INSERT INTO `Apply` VALUES
(11,1111,111,224,'2022-11-04'),
(22,4444,113,229,'2022-11-04');

ALTER TABLE Login
ADD PRIMARY KEY (log_id,username);

ALTER TABLE Admin
ADD PRIMARY KEY (id),
ADD FOREIGN KEY (log_id) REFERENCES Login(log_id);

ALTER TABLE Company
ADD PRIMARY KEY (id),
ADD FOREIGN KEY (log_id) REFERENCES Login(log_id);

ALTER TABLE CV
ADD PRIMARY KEY (id);

ALTER TABLE Client
ADD PRIMARY KEY (id),
ADD FOREIGN KEY (log_id) REFERENCES Login(log_id),
ADD FOREIGN KEY (cv_id) REFERENCES CV(id);

ALTER TABLE Job
ADD PRIMARY KEY (job_id),
ADD FOREIGN KEY (company_id) REFERENCES Company(id);

ALTER TABLE Post
ADD PRIMARY KEY (post_id),
ADD FOREIGN KEY (company_id) REFERENCES Company(id),
ADD FOREIGN KEY (job_id) REFERENCES Job(job_id);

ALTER TABLE Apply
ADD PRIMARY KEY (apply_id),
ADD FOREIGN KEY (client_id) REFERENCES Client(id),
ADD FOREIGN KEY (company_id) REFERENCES Company(id),
ADD FOREIGN KEY (job_id) REFERENCES Job(job_id);

