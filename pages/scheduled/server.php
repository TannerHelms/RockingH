<?php
session_start();

require '../DB_connect.php';


$PHONE =  $_SESSION['phone'];
if ($PHONE == "2087031753") {
    $_SESSION['createTime'] = "<a onclick=\"create()\">Create A Time</a>";
    $_SESSION['createCalendar'] = "<a onclick=\"createCalendar()\">Calendar</a>";
} else {
    $_SESSION['createTime'] = "";
}

$sql = "SELECT * FROM users WHERE phone = '$PHONE'";
$results = mysqli_query($link, $sql);
$user_info = mysqli_fetch_assoc($results);

$FIRST = $user_info['first'];
$LAST = $user_info['last'];

$sql = "SELECT time,date FROM calendar WHERE phone = '$PHONE' ORDER BY date";
$results = mysqli_query($link, $sql);
$numRows = mysqli_num_rows($results);
if ($numRows == 0) {
    $time = "<p style=\"text-align:center;\">Currently, you have no lessons scheduled</p>";
} else {



    $time = "<tr>
  <th>Time</th>
  <th>Date</th>
</tr>";



    while ($row = mysqli_fetch_assoc($results)) {
        $txt = substr($row['date'], -5);
        $day = substr($txt, -2);
        $month = substr($txt, 0, 2);
        $years = substr($row['date'], 0, 4);
        switch ($month) {
            case "01":
                $printMonth = 'January';
                break;
            case "02":
                $printMonth = 'February';
                break;
            case "03":
                $printMonth = 'March';
                break;
            case "04":
                $printMonth = 'April';
                break;
            case "05":
                $printMonth = 'May';
                break;
            case "06":
                $printMonth = 'June';
                break;
            case "07":
                $printMonth = 'July';
                break;
            case "08":
                $printMonth = 'August';
                break;
            case "09":
                $printMonth = 'September';
                break;
            case "10":
                $printMonth = 'October';
                break;
            case "11":
                $printMonth = 'November';
                break;
            case "12":
                $printMonth = 'December';
                break;
            default:
                echo 'error';
        }
        $time .= "<tr><td>" . $row['time'] . "</td><td>" . $day . " " . $printMonth . " " . $years . "</td></tr>";
    }
}
