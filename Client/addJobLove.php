<?php
include_once('../config.php');
session_start();
$jid = $_GET['idjob'];
// AND user_id = $jsid

$query= "INSERT INTO `joblove` (`job_id`, `company_id`, `salary`, `description`, `role`, `job_name`, `skills_required`, `address`, `datePost`)
    SELECT `job_id`, `company_id`, `salary`, `description`, `role`, `job_name`, `skills_required`, `address`, `datePost` 
    FROM `job`
    WHERE job.job_id = $jid";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
</head>
<body>
    <p style="margin-left:600px;font-size:30px;">Đã Thêm Vào Danh Sách Công Việc Yêu Thích</p>
    <a href="../Client/controlClient.php" style="margin-left:800px;font-size:30px;">Trang Chủ</a>
</body>
</html>