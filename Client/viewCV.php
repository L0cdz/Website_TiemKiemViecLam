<?php
include_once('../config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Jobs</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/homepage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    
</head>

<body>
    <div style="background-color: white;padding-bottom:10px;">
        <div class="container">
        <?php

                include('../config.php'); //db connection
                $id = $_GET['id'];
                $sql = "SELECT * FROM `cv` where id=$id";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo"<div class='card-job' style='border-radius:15px;border:1px solid #ccc;padding:15px;margin-top:20px;display:inline-block;border:1px solid #ccc;background-color:#ccc;width:100%;'>";
                            echo"<div style='margin-right:auto;margin-left:20px'>";
                                echo "<image src='https://p.kindpng.com/picc/s/78-785827_user-profile-avatar-login-account-male-user-icon.png'>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Họ và Tên:</p>".$row["infor"]."</p>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Học vấn:</p>".$row["education"]."</p>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Kinh nghiệm:</p>".$row["exp"]."</p>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Kỹ năng:</p>".$row["skill"]."</p>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Chứng chỉ:</p>".$row["certificate"]."</p>";
                                echo "<p><p style='font-size:25px;font-style:bold;'>Liên hệ:</p>".$row["contact"]."</p>";
                    }
                }else{
                    echo "None result";
                }
                $conn->close();
            

            ?> 
        </div>
        <div class="text-center">
            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
        </div>

    </div>
</body>

</html>