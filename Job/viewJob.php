<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    
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
        <p id="text-head">Top Jobs</p>
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
                            <a class="nav-link" 
                            style="color: #FAF7F0; border-radius:1px solid #393E46;background-color:#CD104D;" 
                            href="../logout.php">SIGN OUT</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <div style="background-color: white;padding-bottom:10px;">
        <div class="container">
        <?php
            function loadJob(){
                    include('../config.php'); //db connection
                    $jid = $_SESSION['job_id'];
                    $sql = "SELECT * FROM `job` where job_id=$jid";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo"<div class='card-job' style='border: 1px solid black;display: flex;padding:20px;margin-top:20px;flex-wrap:wrap;'>";
                                echo"<div style='margin-right:auto;margin-left:20px'>";
                                    echo "<p style='font-size: 25px; color: red;'>".$row["job_name"]."</p>";
                                    echo "<p>Mô tả :".$row["description"]."</p>";
                                    echo "<p>Kỹ năng :".$row["skills_required"]."</p>";
                                    echo "<p>Lương :".$row["salary"]."</p>";
                                    echo "<p>Vai trò :".$row["role"]."</p>";
                                    echo "<p>Địa chỉ :".$row["address"]."</p>";
                                    
                                echo"</div>";
                            echo"</div>";
                            echo "<style>";
                            echo ".card-job:hover{
                                    background-color: #d9ffff;
                                }";
                            echo "</style>";
                        }
                    }else{
                        echo "None result";
                    }
                    $conn->close();
                }
                loadJob();
            ?> 
        </div>
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;">Copyright @ Top Jobs 2022</p>
    </div>
    
</body>

</html>