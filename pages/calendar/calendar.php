<?php
require 'server.php';
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .calrow {
        font-size: .6rem;
        background: lightgray;
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
                        <?php
                        echo $_SESSION['createTime'];
                        echo $_SESSION['createCalendar'];

                        ?>
                    </li>
                </ul>
            </nav>
            <br>
            <h4 class="date"><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $printMonthC . " " . $year; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h4>
            <br>
            <div class="calendar-container">
                <table class="calendar">
                    <tr>
                        <th id="Sunday">S</th>
                        <th id="Monday">M</th>
                        <th id="Tuesday">T</th>
                        <th id="Wednesday">W</th>
                        <th id="Thursday">TH</th>
                        <th id="Friday">F</th>
                        <th id="Saturday">S</th>
                    </tr>
                    <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }

                    ?>

                </table>
            </div>
        </div>

        <script src="../app.js"></script>
</body>

</html>