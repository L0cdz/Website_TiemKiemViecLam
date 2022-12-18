<?php
include_once('../config.php');
session_start();
$pid = $_GET['pid'];
?>
<?php
    
        $qa = "DELETE FROM `post` WHERE post_id = '$pid'";
    if(!$conn->query($qa))
        echo "connection error" .mysqli_error($conn);
    else{
        header('location:managementPost.php');
    }
?>
