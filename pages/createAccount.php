<?php
if ($_POST['code'] == "1782") {
require 'DB_connect.php';
$FIRST = $_POST['first'];
$LAST = $_POST['last'];
$PHONE = $_POST['phone'];
$PASSWORD = $_POST['password'];
$CONFIRM_PASSWORD = $_POST['confirmPassword'];

$sql = "SELECT * FROM users WHERE phone = '$PHONE';";


$result = mysqli_query($link,$sql);
$check = mysqli_fetch_array($result);
if (isset($check)) {
    echo 'This Phone Number has already been used';
} else if ($PASSWORD === $CONFIRM_PASSWORD){
    $hashPassword = password_hash($PASSWORD, PASSWORD_BCRYPT);
    require 'Db_addRecords.php';
} else {
    echo 'Passwords do not match';
}
} else {
  ?>
  <script>
  window.location.href = "../index.php";
  alert("Invalid Code");

</script>
<?php

  exit();
}


?>
