<?php
include_once('../config.php');
session_start();
$id = $_GET['id'];
$sql = "DELETE FROM `joblove` where job_id=$id";
$result = $conn->query($sql);
echo " <div class='alert alert-danger alert-dismissible' role='alert'>
<p style='font-size: 30px;margin-left:700px;'><strong>Note:</strong>Xóa Thành Công</p>
</div>";
$conn->close();
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
    <a href="controlClient.php" style="margin-left:800px;font-size:30px;">Trang Chủ</a>
</body>
</html>