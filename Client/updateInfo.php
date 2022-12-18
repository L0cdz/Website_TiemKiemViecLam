<?php
include("../config.php");
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
        <p id="text-head">Top Jobs - Client</p>
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
                            <a class="nav-link" style="color: black;" href="controlClient.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="informationClient.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="postJob.php">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;" href="managementApply.php">ManagementApply</a>
                        </li>
                        <li class="nav-item">
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
            <h1>Update Employee's information</h1>
            <form method="POST">
                Full name: <input type="text" name="name" required><br><br>
                Phone number: <input type="text" name="phone" required><br><br>
                E-mail: <input type="text" name="email" required><br><br>
                Please enter password to confirm: <input type="password" name="pwd" required><br><br>

                <button type="submit" style="background-color:azure" name="confirm">Confirm</button>
            </form>
            <?php
                $error = true;
                if(isset($_POST['confirm'])){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    
                    #validate email
                    $query = "Select * from `client` where email='$email'";
                    $result = mysqli_query($conn,$query); 
                    $num = mysqli_num_rows($result);
                    if($num > 0){
                        $error = "Email is already exist.";
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = "Invalid email format!";
                    }
                    else{
                        $password = $_POST['pwd'];
                        $query1 = "Select * from `login` where username='$username'";
                        $res1 = mysqli_query($conn,$query1);
                        

                        #no result or wrong password
                        if(mysqli_num_rows($res1) <= 0 ){
                            $error = "wrong password!";
                        }
                        
                        else{
                            $row = mysqli_fetch_array($res1);
                            if(!password_verify($password,$row['password']))
                                $error = "wrong password!";
                            else{
                    
                                $q2 = "SELECT * FROM `client` JOIN `login`
                                        ON client.log_id = `login`.log_id
                                        WHERE login.username = '$username'";
                                $table2 = mysqli_query($conn,$q2);
                                #infor exist -> update, else -> insert
                                if(mysqli_num_rows($table2) > 0){
                                    $res1 = mysqli_fetch_array($table2);
                                    $q3 = "UPDATE `client`
                                    SET full_name = '$name', phone_number = '$phone',
                                    email = '$email'
                                    WHERE log_id = '".$res1['log_id']."'";
                                    
                                } 
                                #for new user
                                else{
                                    $q4 = "SELECT * FROM `login`
                                        WHERE username = '$username'";
                                    $table3 = mysqli_query($conn,$q4);
                                    $res2 = mysqli_fetch_array($table3);
                                    $lid = $res2['log_id'];
                                    $q3 = "INSERT into `client` 
                                    (`log_id`,`full_name`,`phone_number`,`email`,`cv_id`) 
                                    VALUES ('$lid','$name','$phone','$email','1')";
                                    
                                }
                                
                                if(!$conn->query($q3))
                                    echo "connection error" .mysqli_error($conn);
                                else $error = false;
                                
                            }
                            
                        }
                    }
                    
                    if(!$error){
                        echo "<div class='form'>
                        <h3 style='text-align: center;'>Update successfully.</h3><br/>
                        <p class='link'>Click <a href='informationClient.php'>here</a> to view your informations</p>
                        </div>";
                    }
                    else{
                        echo "<div class='form'>
                        <h3 style='text-align: center;'>Something went wrong!.</h3><br/>
                        <strong>!</strong> '$error
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