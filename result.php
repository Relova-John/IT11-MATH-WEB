<?php
$score = isset($_GET['score']) ? $_GET['score'] : 0;
$total = isset($_GET['total']) ? $_GET['total'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2e9e1;
                color: #4a2c2a;
                margin: 0;
                padding: 20px;
            }
            .container {
                background-color: #fff;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 0 auto;
            }
            h1 {
                text-align: center;
                color: #2c1a18;
                font-size: 2.5em;
                margin-bottom: 20px;
            }
            .score-display {
                text-align: center;
                font-size: 2em;
                color: #2c1a18;
                margin-top: 20px;
            }
            .links {
                text-align: center;
                margin-top: 20px;
            }
            .links .btn {
                background-color: #2c1a18;
                color: #fff;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                font-size: 1.2em;
                margin-top: 10px;
            }
            .links .btn:hover {
                background-color: #4a2c2a;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Quiz Result</h1>
            <div class="score-display">
                <p>Your Score: <?php echo $score; ?> / <?php echo $total; ?></p>
            </div>
            <div class="links">
                <a href="index.php" class="btn">Try Again</a><br>
                <a href="leaderboard.php" class="btn">View Leaderboard</a>
            </div>
        </div>
    </body>
</html>
