<?php
include 'DB_connect.php';

$PHONE = $_POST['phone'];
$PASSWORD = $_POST['password'];

$sql = "SELECT * FROM users WHERE phone = '$PHONE';";



$result = mysqli_query($link,$sql);
$check = mysqli_fetch_assoc($result);


if (!password_verify($PASSWORD,$check['pass'])) {
        ?>
        <script>
        window.location.href = "../index.php";
        alert("Incorrect Username/Password Combination");

     </script>
     <?php

} else {
    session_start();
    unset($_SESSION['phone']);
    $_SESSION['phone'] = $PHONE;
    header("Location: scheduled/scheduled.php");
}

?>
