<?php

include("connect.php"); //Establishing connection with our database
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else {
    $username = $_POST['2001228'];
    $password = $_POST['2001228'];
    $sql = "SELECT uid FROM users WHERE username='$username' and
password='$password'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); // Redirecting To another Page
    } else {
        echo "Incorrect username or password.";
    }
}
?>
