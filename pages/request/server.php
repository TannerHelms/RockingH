<?php
session_start();
$PHONE =  $_SESSION['phone'];

require '../DB_connect.php';

date_default_timezone_set('America/Boise');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today
$today = date('Y-m-j', time());
$numTime = date('j', time());
$month = date('m', $timestamp);

$printMonthC = '';
$year = date('Y', $timestamp);
switch ($month) {
    case "01":
        $printMonthC = 'January';
        break;
    case "02":
        $printMonthC = 'February';
        break;
    case "03":
        $printMonthC = 'March';
        break;
    case "04":
        $printMonthC = 'April';
        break;
    case "05":
        $printMonthC = 'May';
        break;
    case "06":
        $printMonthC = 'June';
        break;
    case "07":
        $printMonthC = 'July';
        break;
    case "08":
        $printMonthC = 'August';
        break;
    case "09":
        $printMonthC = 'September';
        break;
    case "10":
        $printMonthC = 'October';
        break;
    case "11":
        $printMonthC = 'November';
        break;
    case "12":
        $printMonthC = 'December';
        break;
    default:
        echo 'error';
}

$html_title = date('m / Y', $timestamp);
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) - 1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) + 1, 1, date('Y', $timestamp)));
$day_count = date('t', $timestamp);
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
$weeks = array();
$week = '';
$week .= str_repeat('<td></td>', $str);

for ($day = 1; $day <= $day_count; $day++, $str++) {

    $date = $ym . '-' . $day;
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }

    $sql = "SELECT time FROM calendar WHERE date = '$date' AND phone IS NULL;";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($str % 7 == 6 || $str % 7 == 0) {
        $week .= '<br>Closed';
    } else {
        //This is where I create the button with the assigned values

        $week .= "<br>

        <form action=\"createForm.php\">
    <input type=\"hidden\" id=\"day\" name=\"day\" value=\"" . $day . "\">
    <input type=\"hidden\" id=\"month\" name=\"month\" value=\"" . $printMonthC . "\">
    <input type=\"hidden\" id=\"year\" name=\"year\" value=\"" . $year . "\">
    <input type=\"hidden\" id=\"date\" name=\"date\" value=\"" . $date . "\">
    <input type=\"submit\" value=\"+\">
    </form>



        ";
    }




    $week .= '</td>';



    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';


        // Prepare for new week
        $week = '';
    }
}
if (isset($_POST['times'])) {
    echo $_POST['times'];
}


$sql = "SELECT first,last FROM users WHERE phone = '$PHONE'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$FIRST = $row['first'];
$LAST = $row['last'];
