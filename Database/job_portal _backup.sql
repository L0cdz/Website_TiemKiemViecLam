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
(1,'admin','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','admin'),
(2,'user','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','company'),
(3,'user1','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','company'),
(4,'user2','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client'),
(5,'user3','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client'),
(6,'admin2','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','admin'),
(7,'user4','$2y$10$3noR.uZOta1FDS3D3fI39eiCYvN5YkxCfLbByInz7VcMFqJL4BE3.','client');

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE `Admin`
(
  id INT(10) NOT NULL,
  log_id INT(10) NOT NULL,
  name VARCHAR(50) DEFAULT NULL
);
INSERT INTO `Admin` VALUES
('100',1,'Alter rubber'),
('101',6,'Donald Trump'),
('102',6,'Elon Musk'),
('103',1,'MySQL');

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
(1000,2,'Company 1','023124123','Company1@gmail.com'),
(1001,3,'Company 2','033124123','Company2@gmail.com'),
(1002,2,'Company 3','043124123','Company3@gmail.com'),
(1003,3,'Company 4','052124123','Company4@gmail.com');

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
(5000,4,'Employee 1','employee1@gmail.com','0123456789',1),
(5001,7,'Employee 2','employee2@gmail.com','0173456799',2),
(5002,5,'Employee 3','employee3@gmail.com','0153456789',2),
(5003,5,'Employee 4','employee4@gmail.com','0133456787',1);

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
(222,1000,'$4000','This job is great','Admin','Back end dev','SQL'),
(224,1003,'$7500','This job is great','Admin','Front end dev','HTMLL CSS JS'),
(229,1002,'$9000','This job require high skills','Developer','Data Engineer at Google','Apache Spark');

DROP TABLE IF EXISTS `Post`;
CREATE TABLE `Post`
(
  post_id INT(10) NOT NULL,
  post_date date DEFAULT NULL,
  company_id INT NOT NULL,
  job_id INT(10) NOT NULL
);
INSERT INTO `Post` VALUES
(21,'2022-11-04',1001,222),
(24,'2022-11-04',1002,224),
(27,'2022-11-04',1003,229),
(35,'2022-11-04',1000,224);

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
(11,1000,5000,224,'2022-11-04'),
(22,1002,5003,229,'2022-11-04');

ALTER TABLE Login
ADD PRIMARY KEY (log_id,username),
MODIFY `log_id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE Admin
ADD PRIMARY KEY (id),
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104,
ADD FOREIGN KEY (log_id) REFERENCES Login(log_id);

ALTER TABLE Company
ADD PRIMARY KEY (id),
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004,
ADD FOREIGN KEY (log_id) REFERENCES Login(log_id);

ALTER TABLE CV
ADD PRIMARY KEY (id);

ALTER TABLE Client
ADD PRIMARY KEY (id),
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004,
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