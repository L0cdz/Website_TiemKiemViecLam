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
            background-color: #C1EBF9;
        }
        body>div>form{
            background-color:#E2DEF5;
            border:1px solid black;
            padding: 30px;
        }
        body>div>form>button{
            color:white;
            background-color: black;
        }
        body>div>form>h2{
            font-style: bold ;
            size: 50px;
        }

        
    </style>
    <script>
        function checkData() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("pwd").value;

            if (username.value == "") {
                document.getElementById("mess").innerHTML = "Vui Long Nhap Username";  
            } else if(password.value == "") {
                document.getElementById("mess").innerHTML = "Vui Long Nhap Password";
            }
            else{
                ;
            }
        }
    </script>

    <div class="container">
        <form action="/main.php">
            <h1>Login</h1>
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <p id="mess"></p>
            <button onclick="checkData()" type="submit" class="btn btn-default">Login</button>
        </form>
    </div>

</body>

</html>