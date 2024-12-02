<?php
$leaderboard = "leaderboard.txt";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leaderboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2e9e1;
                color: #4a2c2a;
                margin: 0;
                padding: 20px;
            }
            h1 {
                text-align: center;
                color: #2c1a18;
                font-size: 2.5em;
                margin-bottom: 20px;
            }
            .container {
                background-color: #fff;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 0 auto;
            }
            pre {
                background-color: #2c1a18;
                color: #f2e9e1;
                padding: 20px;
                border-radius: 5px;
                font-size: 1.2em;
                white-space: pre-wrap;
                word-wrap: break-word;
                margin: 0;
            }
            .no-data {
                font-size: 1.5em;
                color: #a65d5d;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            if (file_exists($leaderboard)) {
                $scores = file_get_contents($leaderboard);
                echo "<h1>Leaderboard</h1>";
                echo "<pre>$scores</pre>";
            } else {
                echo "<h1>Leaderboard</h1>";
                echo "<p class='no-data'>No leaderboard data available.</p>";
            }
            ?>
        </div>
    </body>
</html>
