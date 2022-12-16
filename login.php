<?php   
    include("config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Jobs</title>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <p>Login</p>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-default" name="signin">Login</button>
            <br><br>
            <a href="regis.php" name="signup">New user? Create an account.</a>
        </form>
    </div>
</body>

<?php
    $message = "Tên đăng nhập hoặc mật khẩu không đúng";    
    if(isset($_POST['signin'])){
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = strip_tags(mysqli_real_escape_string($conn, trim($username)));
        $password = strip_tags(mysqli_real_escape_string($conn,trim($password)));
        $query = "SELECT * FROM `login` WHERE `username` = '".$username."'";
        
        $table = mysqli_query($conn,$query);
        if(mysqli_num_rows($table) > 0){
            $row = mysqli_fetch_array($table);
            $password_hash = $row['password'];
            if (password_verify($password,$password_hash)){
        
                $_SESSION['log_id'] = $row['log_id'];
                if($row['account_type'] == "admin" ){
                    $_SESSION['username'] = $username;
                    header("Location: Admin/controlAdmin.php");
                    exit();
                }
                else if($row['account_type'] == "employee"){
                    $_SESSION['username'] = $username;
                    header("Location: Client/controlClient.php");
                    exit();
                }
                else{
                
                    $_SESSION['username'] = $username;
                    header("Location: Company/controlCompany.php");
                    exit();
                }
            }
            else{
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        else{
            
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
?>


</html>