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
                            <a class="nav-link" style="color: black;" href="bookmarkJob.php">Bookmark</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" 
                            style="color: #FAF7F0; border-radius:1px solid #393E46;background-color:#CD104D;" 
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

    <div class="bodySlideshow">
            <div id="carouselExampleIndicators" class="carousel slide col-12 p-0 mt-3 m-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img class="d-block w-100" src=".././Images/slideshow1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src=".././Images/slideshow2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src=".././Images/slideshow3.png" alt="Third slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="margin-right: 1000px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
    </div>

    <div style="background-color: white;padding-bottom:10px;height:1080px;">
        <div class="container">
        <div class="container">
            <?php
                include('../config.php'); //db connection
                $sql = "SELECT * FROM `job`";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "Tên Công Việc:".$row["job_name"]."<br>";
                        echo "Mô tả:".$row["description"]."<br>";
                        echo "Lương:".$row["salary"]."<br>";
                        echo "Kỹ Năng:".$row["skills_required"]."<br>";
                        echo "<button name='btnapply'>Apply</button>";
                        echo "<button name='btnlove'>Love</button>";
                        echo "<hr>";
                    }
                }else{
                    echo "None result";
                }
                $conn->close();
            ?>  
        </div>
        </div>
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;">Copyright @ Top Jobs 2022</p>
    </div>
    
</body>

</html>