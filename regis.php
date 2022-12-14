<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Jobs</title>
    <link rel="stylesheet" href="css/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <p>Register</p>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" required>
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="cpwd" placeholder="Comfirm Password" name="cpwd" required>
            </div>
            <br>
            <label>Please choose role:</label>
            <div class="form-group">
                <input type="radio" id="role_company" name="role" checked value="company">
                <label>Company</label>
            </div>
            <div class="form-group">
                <input type="radio"id="role_employee" name="role" value="employee">
                <label>Employee</label>
            </div>
            <br>
            <button id = "signup" type="submit" class="btn btn-default" name="signup">Register</button>
            <br><br>
            <a href="login.php" name="signin">Already have an account? Sign in.</a>
        </form>
    </div>

</body>


<?php
    $exists=false;
    $showAlert = false;
    $showError = false;

    // When form submitted, insert values into the database.
    if(isset($_POST['signup'])) {
        include('config.php'); //db connection
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['pwd']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpwd']);

        $account_type = mysqli_real_escape_string($conn, $_POST['role']);
        

        $query = "Select log_id from `login` where username='$username'"; 
        $result = mysqli_query($conn,$query); 
        $num = mysqli_num_rows($result);
        if($num > 0){
            $exists = "Tên đăng nhập đã được sử dụng, vui lòng chọn tên khác.";
            
        }

        else if($num == 0) { //no duplicate username
            if(($password == $cpassword) && $exists==false) {
        
                $password_hash = password_hash($password,PASSWORD_BCRYPT);
                
                $sql = "INSERT into `login` 
                        (`username`,`password`,`account_type`) 
                        VALUES ('$username','$password_hash','$account_type')";
            
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true; 
                }
            } 
            else { 
                $showError = "Passwords do not match"; 
            }      
        }
    
        if($showAlert) {
            echo "<div class='form'>
            <h3 style='text-align: center;'>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
        }
        else{
            echo "<div class='form'>
            <h3 style='text-align: center;'>Required fields are missing</h3><br/>
            </div>";
        }
        
        if($showError) {
        
            echo ' <div class="alert alert-danger 
                alert-dismissible fade show" role="alert"> 
            <strong>!</strong> '. $showError.'
        
            
            </div> '; 
        }
            
        if($exists) {
            echo ' <div class="alert alert-danger 
                alert-dismissible fade show" role="alert">
        
                <strong>!</strong> '. $exists.'
            </div> '; 
        }
    }
    
?>
</html>