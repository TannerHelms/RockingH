<?php
$sql = "INSERT INTO `users` (`first`, `last`, `phone`, `pass`) VALUES
('$FIRST', '$LAST', '$PHONE', '$hashPassword');";

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
