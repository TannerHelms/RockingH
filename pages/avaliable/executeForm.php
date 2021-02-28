<?php
session_start();
include '../DB_connect.php';
$PHONE = $_SESSION['phone'];

$sql = "SELECT first,last FROM users WHERE phone = $PHONE;";
$results = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($results);
$FIRST = $row['first'];
$LAST = $row['last'];
$DATE = $_SESSION['date'];
$TIME = $_SESSION['time'];
$sql = "UPDATE calendar SET first_name='$FIRST', last_name='$LAST', phone='$PHONE'
WHERE date='$DATE' AND time='$TIME'";
if (mysqli_query($link, $sql)) {
  $_SESSION['toggleAvaliable'] = "none";
  $_SESSION['toggleScheduled'] = "block";
  header("Location: ../scheduled/scheduled.php");
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error . "<br>";
}
