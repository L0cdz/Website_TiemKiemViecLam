<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <style>
        form {
            max-width: 400px;
            margin: auto;
        }
        body{
            background-color: #E2DEF5;
        }
        body>div>form{
            background-color:#C1EBF9;
            border:1px solid black;
            padding: 30px;
            text-align: center;
            width: 300px;
            height: 280px;
        }
        body>div>form>button{
            color:white;
            background-color: black;
            padding: 5px;
        }
        body>div>p{
            font-family: Garamond, serif;
            font-size: 50px;
            text-align: center;
            display: block;
            
        }
        .form-control{
            padding: 5px;
            width: 200px;
            
        }

        
    </style>

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
                <input type="password" class="form-control" id="cpwd" placeholder="Comfirm Password" name="cpwd">
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

</html>