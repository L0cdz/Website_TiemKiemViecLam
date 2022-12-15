<?php
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
      
</head>

<body>
    <header>
        <p id="text-head">Top Jobs - Company</p>
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
                                <a class="nav-link" style="color: black;" href="controlCompany.php"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;"href="informationCompany.php"> Information </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="postJob.php"> Post </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: black;" href="managementApply.php"> Apply Management </a>
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

    <div style="background-color: #C1EBF9;padding-bottom:10px;height:1080px;">
        <div class="container">
            <h1>Update Company's information</h1>
            <form method="POST">
                Company's name: <input type="text" name="name" required><br><br>
                Phone number: <input type="text" name="phone" required><br><br>
                E-mail: <input type="text" name="email" required><br><br>
                Icon Link's: <input type="text" name="icon" required><br><br>
                Please enter password to confirm: <input type="password" name="pwd" required><br><br>

                <button type="submit" style="background-color:azure" name="confirm">Confirm</button>
            </form>
            <?php
                $error = true;
                if(isset($_POST['confirm'])){
                    include('../config.php');
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $icon = $_POST['icon'];
                    #validate email
                    $query = "Select * from `company` where company_email='$email'"; 
                    $result = mysqli_query($conn,$query); 
                    $num = mysqli_num_rows($result);
                    if($num > 0){
                        $error = "Email already exist.";
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = "Invalid email format";
                    }
                    else{
                        $password = $_POST['pwd'];
                        $lid = $_SESSION['log_id'];
                        $query1 = "Select * from `login` where log_id='$lid'";
                        $table = mysqli_query($conn,$query1);
                        $row = mysqli_fetch_array($table);
                        if(!mysqli_num_rows($table) > 0 && password_verify($password,$row['password'])){
                            $error = "wrong password!";
                        }
                        else{
                            if(isset($_SESSION['log_id'])){
                                $query = "SELECT * FROM `Company` WHERE `log_id` = '$lid'";
                                $table = mysqli_query($conn,$query);
                                #infor exist -> update, else -> insert
                                if(mysqli_num_rows($table) > 0){
                                    $q = "UPDATE Company
                                    SET company_name = '$name', phone_number = '$phone',
                                    company_email = '$email', icon = NULL
                                    WHERE id = '$lid'";
                                } 
                                else{
                                    $q = "INSERT into `Company` 
                                    (`log_id`,`company_name`,`phone_number`,`company_email`,'icon') 
                                    VALUES ('$name','$phone','$email','$icon')";
                                }
                                $result = mysqli_query($conn, $q);
                                if($result){
                                    $error = false;
                                }
                                
                            }
                        }
                    }
                    
                    if(!$error){
                        echo "<div class='form'>
                        <h3 style='text-align: center;'>Update successfully.</h3><br/>
                        <p class='link'>Click <a href='informationCompany.php'>here</a> to view your informations</p>
                        </div>";
                    }
                    else{
                        echo "<div class='form'>
                        <h3 style='text-align: center;'>Something went wrong!.</h3><br/>
                        <strong>!</strong> '$error'
                        </div>";
                    }

                }

               
            ?>         
            
        </div>
    </div>
    
    <div class="footer">
        <p style="text-align: center; line-height: 200px; color: black;background-color: #E2DEF5;">Copyright @ Top Jobs 2022</p>
    </div>

</body>



</html>