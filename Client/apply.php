<?php
include_once('../config.php');
session_start();
$jid = $_GET['id'];
// AND user_id = $jsid
$username = $_SESSION['username'];
if(isset($_SESSION['username'])){
    $q0 = "SELECT * FROM `client` JOIN `login`
        ON client.log_id = login.log_id
        WHERE username = '$username'";
    $tbl = mysqli_query($conn,$q0);
    $res = mysqli_fetch_array($tbl);
}

$eid = $res['id'];
$date = date("Y-m-d");

$q1=mysqli_query($conn,"SELECT * FROM `apply` WHERE apply.client_id =$eid"); 
if(mysqli_num_rows($q1)>0){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
        <p style='font-size: 30px;margin-left:600px;'><strong>Note:</strong> You have already applied this job!</p>
        </div>";
}
else{
    $q2=mysqli_query($conn,"SELECT * FROM `job` WHERE job_id =$jid ");
    $q2re=mysqli_fetch_array($q2);
    
    $q3=mysqli_query($conn,"INSERT INTO `apply` (client_id,job_id,apply_date) VALUES ($eid,$jid,$date)");
   // echo mysqli_error($db1);
    if($q2){
        $q4=mysqli_query($conn,"SELECT * from client join `apply` on client.id=apply.client_id where client.id=$eid");
        $row=mysqli_fetch_array($q4);
        echo " <div class='alert alert-success alert-dismissible' role='alert'>
        <p style='font-size: 25px'><strong>Note:</strong> Success</p>
        <html>
                <head>
                    <h3>Congratulation $row[full_name] successfully Applied For $q2re[job_name]</h3>
                </head>
                <body>
                    You can now check your application when you logged in to your account.
                    <br><br><table>
                    <tr>
                    <th>Hope you enjoy our services</th>
                    </tr>
                    <tr>
                    <th>From Tob Job team</th>
                    </tr>
                    </table>
                </body>
                </html>
        </div>";
    }
    else{
        echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
        <p style='font-size: 20px'><strong>Oops!:</strong> Something went wrong!</p>
        </div>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
</head>
<body>
    <a href="../Client/controlClient.php" style="margin-left:800px;font-size:30px;">Trang Chủ</a>
</body>
</html>