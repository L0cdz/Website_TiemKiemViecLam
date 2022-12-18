<?php
include_once('../config.php');
session_start();
$username = $_SESSION['username'];
if(isset($_SESSION['username']))
{
    $query = "select *
    from `client` join `login` on client.log_id=login.log_id WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query);
}
else
{
    header('location:../login.php');
}
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
    
</head>

<body>
    <header>
        <p id="text-head">Top Jobs - Employee</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0;">
            <div class="container-fluid" style="background-color: #E2DEF5;padding: 20px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;"  href="controlClient.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="informationClient.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="managementApply.php">ManagementApply</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="managementCV.php">ManagementCV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="loveJob.php">Job</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            while ($row = mysqli_fetch_assoc($result2)) {
                                echo "<p class='nav-link' style='color: black;'>Xin chào:".$row['full_name']."</p>";
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" 
                            style="color: #FAF7F0; border: 2px solid red;border-radius: 30px;background-color:#CD104D;" 
                            href="../logout.php">SIGN OUT</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <div style="background-color: white;padding-bottom:10px;height:1080px;">
        <div class="container">
        <?php

            include('../config.php'); //db connection
            $sql = "SELECT * FROM `joblove`";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $id = $row['job_id'];
                    echo"<div class='card-job' style='border-radius:40px;border: 1px solid #ccc;display: flex;padding:20px;margin-top:20px;flex-wrap:wrap;'>";
                        echo "<div>";
                            echo "<image src='https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/71-github-256.png' style='width:200px;height:100px;'></image>";
                        echo"</div>";
                        echo"<div style='margin-right:auto;margin-left:20px'>";
                            echo "<p style='font-size: 25px; color: red;'>".$row["job_name"]."</p>";
                            echo "<p>".$row["skills_required"]."</p>";
                            echo "<p>".$row["address"]."</p>";
                            echo "<p>".$row["salary"]."</p>";
                        echo"</div>";
                        echo"<form method='POST'style='align-self: center;'>";
                            echo"<a  href=\"viewJob.php?idjob=$id\" style='border-radius:10px;text-decoration:none;padding:15px 25px;margin-top:20px;display:inline-block;border:1px solid #ccc;background-color:#ccc;'   value='View' name='btnView'>Xem</a>";
                            echo "<br>";
                            echo"<a  href=\"deleteLoveJob.php?id=$id\" style='border-radius:10px;text-decoration:none;padding:15px 25px;margin-top:20px;display:inline-block;border:1px solid #ccc;background-color:#ccc;'   value='View' name='btnView'>Xóa</a>";
                        echo"</form>";
                    echo"</div>";
                    echo "<style>";
                    echo ".card-job:hover{
                            background-color: rgb(251, 246, 221);
                        }";
                    echo "</style>";
                }
            }else{
                echo "Không Có Công Việc Yêu Thích";
            }
            $conn->close();

        ?> 
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;margin-top:20px;">Copyright @ Top Jobs 2022</p>
    </div>
    
</body>

</html>