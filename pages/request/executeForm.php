<?php
session_start();
include '../DB_connect.php';
$PHONE = $_SESSION['phone'];
$START = $_GET['startTime'];
$END = $_GET['endTime'];
$TIME = $START . "-" . $END;
$sql = "SELECT first,last FROM users WHERE phone = $PHONE;";
$results = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($results);
$FIRST = $row['first'];
$LAST = $row['last'];
$DATE = $_SESSION['date'];

$sql = "INSERT INTO `calendar` (`date`, `time`, `first_name`, `last_name`, `phone`) VALUES
('$DATE', '$TIME', '$FIRST', '$LAST', '$PHONE');";

if ($result = mysqli_query($link, $sql)) {
  header("Location: ../scheduled/scheduled.php");
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error . "<br>";
}
