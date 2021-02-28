<?php

require 'server.php';

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scheduled Lessons</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

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
                        echo $_SESSION['createCalendar'];  ?>
                    </li>
                </ul>
            </nav>

            <table class="calendar">

                <?php echo $time;  ?>

            </table>

        </div>
    </div>

    <script src="../app.js"></script>

</body>

</html>