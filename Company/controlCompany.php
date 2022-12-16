<?php
include_once('../config.php');
session_start();
$username = $_SESSION['username'];
if(isset($_SESSION['username']))
{
    $query = "select *
    from `company` join `login` on company.log_id=login.log_id WHERE username = '$username'";
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
        <p id="text-head">Top Jobs - Company</p>  




</table>
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
                            <a class="nav-link" style="color: black;" href="controlCompany.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="informationCompany.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="postJob.php">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="managementApply.php">ManagementApply</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            while ($row = mysqli_fetch_assoc($result2)) {
                                echo "<p class='nav-link' style='color: black;'>Xin chào:".$row['company_name']."</p>";
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

    <div class="container-search" style="padding: 20px;background-color: #EEE4C1;">
        <form class="form-inline my-2 my-lg-0" style=" display: flex;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div style='display: flex;padding:20px;margin-top:20px;flex-wrap:wrap;margin-left:180px'>
        <div class="w3-content w3-section" style="max-width:1300px">
            <img class="mySlides" src="https://baraqahmutaqqin.com.my/wp-content/uploads/2017/12/banner-02-1300x300.png" style="width:100%">
            <img class="mySlides" src="https://www.rmit.edu.vn/content/dam/rmit/vn/en/assets-for-production/images/events/sbm/hr-forum-2020/hr-forum-2020-event-banner-1300x300.jpg" style="width:100%">
            <img class="mySlides" src="https://baraqahmutaqqin.com.my/wp-content/uploads/2017/12/banner-03-1300x300.png" style="width:100%">
        </div>
    </div>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

    <div style="background-color: white;padding-bottom:10px;">
        <div class="container">
            <p style='font-size: 40px;'>Công Ty Nổi Bật</p>
            <?php
                
                function loadCompany(){
                    include('../config.php'); //db connection
                    $sql = "SELECT * FROM `company`";
                    $result = $conn->query($sql);
                    $limit = 0;
                    if($result->num_rows>0){
                        echo"<div style='display:flex; justify-content: space-between; flex-wrap:wrap;'>";
                        while($row = $result->fetch_assoc()){
                            if($limit<10){
                                echo"<div class='card-com' style='border: 1px solid black;display: inline-block;padding:20px;flex-wrap:wrap;margin-top:20px;'>";
                                    echo "<div>";
                                        echo "<image src='https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/71-github-256.png' style='width:200px;height:100px;'></image>";
                                    echo"</div>";
                                    echo"<div>";
                                        echo "<p style='font-size: 25px; color: red;'>".$row["company_name"]."</p>";           
                                    echo"</div>";
                                echo"</div>";
                                echo "<style>";
                                    echo ".card-com:hover{
                                        background-color: rgb(251, 246, 221);
                                    }";
                                echo "</style>";
                            }
                            $limit += 1;
                            
                        }
                        echo"</div>";
                    }else{
                        echo "None result";
                    }
                    $conn->close();
                }
                loadCompany();
            ?> 
            <p style='font-size: 40px;'>Việc Làm IT Chất</p>
            <?php
            function loadJob(){
                    include('../config.php'); //db connection
                    $sql = "SELECT * FROM `job`";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            
                            echo"<div class='card-job' style='border: 1px solid black;display: flex;padding:20px;margin-top:20px;flex-wrap:wrap;'>";
                                echo "<div>";
                                    echo "<image src='https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/71-github-256.png' style='width:200px;height:100px;'></image>";
                                echo"</div>";
                                echo"<div style='margin-right:auto;margin-left:20px'>";
                                    echo "<p style='font-size: 25px; color: red;'>".$row["job_name"]."</p>";
                                    echo "<p>".$row["skills_required"]."</p>";
                                    echo "<p>".$row["address"]."</p>";
                                    echo "<p>".$row["salary"]."</p>";
                                echo"</div>";
                                echo"<form method='post'style='align-self: center;'>";
                                    echo"<input style='width:100px;height:50px;background-color:#E2DEF5;' type='submit' value='View' name='btnView'></input>";
                                
                                echo"</form>";
                            echo"</div>";
                            echo "<style>";
                            echo ".card-job:hover{
                                    background-color: rgb(251, 246, 221)
                                }";
                            echo "</style>";
                        }
                    }else{
                        echo "None result";
                    }
                    $conn->close();
                }
                loadJob();
                if(isset($_POST["btnView"])){
                    ?>
                        <script type='text/javascript'>
                            window.open('../Job/viewJob.php')
                        </script>"
                    <?php
                }
            ?> 
        </div>
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;">Copyright @ Top Jobs 2022</p>
    </div>
    
</body>

</html>