<?php
$leaderboard = "leaderboard.txt";
if (file_exists($leaderboard)) {
    $scores = file_get_contents($leaderboard);
    echo "<h1>Leaderboard</h1>";
    echo "<pre>$scores</pre>";
} else {
    echo "<h1>No leaderboard data available.</h1>";
}
?>
