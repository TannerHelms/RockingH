<?php
require 'server.php';
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Avaliable Times </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    form {
        align-items: center;
        display: flex;
        margin-left: 15px;
    }
</style>

<body>
    <div class="container">
        <div class="content">
            <button class="logout">Logout</button>
            <h1 class="welcome-msg"><?php echo "Welcome, $FIRST $LAST" ?></h1>
            <br>
            <nav>
                <ul class="nav-list">
                    <li>
                        <a onclick="scheduled()">Scheduled Lessons</a>
                        <a onclick="avaliable()">Avaliable Times</a>
                        <a onclick="request()">Request A Time</a>
                        <?php echo $_SESSION['createTime'];
                        echo $_SESSION['createCalendar']; ?>
                    </li>
                </ul>
            </nav>
            <br>
            <h4 class="date"><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $printMonthC . " " . $year; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h4>
            <br>
            <div class="calendar-container">
                <table class="calendar">
                    <tr>
                        <th id="Sunday">Sunday</th>
                        <th id="Monday">Monday</th>
                        <th id="Tuesday">Tuesday</th>
                        <th id="Wednesday">Wednesday</th>
                        <th id="Thursday">Thursday</th>
                        <th id="Friday">Friday</th>
                        <th id="Saturday">Saturday</th>
                    </tr>
                    <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }

                    ?>

                </table>
            </div>
        </div>

        <script src="../app.js" async defer></script>
</body>

</html>