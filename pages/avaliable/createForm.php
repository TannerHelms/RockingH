<?php
session_start();

$_SESSION['time'] = $_GET['time'];
$_SESSION['date'] = $_GET['date'];

?><DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">


    </head>
    <style>
        .content {
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>

    <body>
        <br>

        <div class="container">
            <div class="content">
                <form action="executeForm.php">
                    <label name="time">Time: <?php echo $_GET['time']  ?></label><br>
                    <label for="date">Date: <?php echo $_GET['month'] . " " . $_GET['day'] . " " . $_GET['year']; ?></label><br>

                    <input type="submit" value="Schedule">
                </form>
            </div>
        </div>


    </body>

    </html>