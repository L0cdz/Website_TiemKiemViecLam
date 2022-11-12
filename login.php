<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            color:white !important;
            background-color: black !important;
        }

        
    </style>
    <script>
        function checkData() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("pwd").value;

            if (email.includes("@") == true) {
                if (password.length > 8) {
                    ;
                } else {
                    document.getElementById("mess").innerHTML = "Password Khong Hop Le";
                    
                };
            } else {
                document.getElementById("mess").innerHTML = "Email Khong Hop Le";
            }

        }
    </script>

    <div class="container">
        <form action="/main.php">
            <h2>Login</h2>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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