<?php
session_start();
$_SESSION['date'] = $_GET['date'];
?><DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css" class="st">

    </head>
    <style>
        .content {
            display: flex;
            justify-content: center;
        }

        form:nth-child(1) {
            text-align: center;
        }
    </style>

    <body>
        <br>

        <div class="container">
            <div class="content">
                <form action="./executeForm.php">
                    <label id="date">Date: <?php echo $_GET['month'] . " " . $_GET['day'] . " " . $_GET['year']; ?></label><br><br>
                    <label for="startTime" name="startTime">Start Time: (Ex: 9:30)</label><br>
                    <input type="text" name="startTime" value=""></input><br><br>
                    <label for="endTime" name="endTime">End Time: (Ex: 10:30)</label><br>
                    <input type="text" name="endTime" value=""></input><br><br>
                    <input type="submit" value="Request Time"><br>
                </form>
            </div>

        </div>


    </body>

    </html>