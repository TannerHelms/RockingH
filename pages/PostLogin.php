
<?php

include 'DB_connect.php';
$NAME = $_POST['name'];
$IP = $_POST['Ip'];
$sql = "INSERT INTO `Logins` (`first`, `Login`, `Ip`) VALUES ('$NAME', CURRENT_TIMESTAMP, '$IP');";

if (mysqli_query($link, $sql)) {
  ?>
  <script>
  window.location.href = "../index.php";
  alert("Account Created Sucessfully");

</script>
<?php

} else {
    echo "<br>Error: " . $sql . "<br>" . $conn -> error. "<br>";
}

?>
