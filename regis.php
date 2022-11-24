<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Jobs</title>
    <link rel="stylesheet" href="css/register.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        var password = document.getElementById("pwd")
        , confirm_password = document.getElementById("cpwd");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</head>

<body>
    <div class="container">
        <p>Register</p>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="cpwd" placeholder="Comfirm Password" name="cpwd" required>
            </div>
            <br>
            <label>Please choice role:</label>
            <div class="form-group">
                <input type="radio" id="role_company" name="role">
                <label>Company</label>
            </div>
            <div class="form-group">
                <input type="radio"id="role_employee" name="role">
                <label>Employee</label>
            </div>
            <br>
            <button onclick="" type="submit" class="btn btn-default" name="signup">Register</button>
            <br><br>
            <a href="login.php" name="signin">Already have an account? Sign in.</a>
        </form>
    </div>

</body>
<?php
    require('config.php');
    include('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $id = rand(1,100000);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['pwd']); 
        $account_type = mysqli_real_escape_string($conn,  $_POST['role']);
        
        $query = "INSERT into `login` (`id`,`username`,`password`,`account_type`) VALUES ('$id','$username','$password','$account_type')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </div>";
        }else{
            echo "<div class='form'>
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='regis.php'>registration</a> again.</p>
                </div>";
        }
    }
?>
</html>