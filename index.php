<?php
$questions = [
    [
        "question" => "What does PHP stand for?",
        "options" => ["Personal Home Page", "Private Home Page", "PHP: Hypertext Preprocessor", "Public Hypertext Preprocessor"],
        "answer" => 2
    ],
    [
        "question" => "Which symbol is used to access a property of an object in PHP?",
        "options" => [".", "->", "::", "#"],
        "answer" => 1
    ],
    [
        "question" => "Which function is used to include a file in PHP?",
        "options" => ["include()", "require()", "import()", "load()"],
        "answer" => 0
    ],
    [
        "question" => "What does the PHP function `var_dump()` do?",
        "options" => ["Displays variable type and value", "Generates a random number", "Reads file content", "None of the above"],
        "answer" => 0
    ],
    [
        "question" => "Which PHP function is used to get the length of a string?",
        "options" => ["length()", "get_length()", "str_len()", "strlen()"],
        "answer" => 3
    ],
    [
        "question" => "Which of the following is the correct way to start a session in PHP?",
        "options" => ["start_session();", "session_start();", "session();", "begin_session();"],
        "answer" => 1
    ],
    [
        "question" => "What is the default file extension for PHP files?",
        "options" => [".html", ".php", ".htm", ".phtml"],
        "answer" => 1
    ],
    [
        "question" => "Which of the following is used for comments in PHP?",
        "options" => ["# This is a comment", "// This is a comment", "/* This is a comment */", "All of the above"],
        "answer" => 3
    ],
    [
        "question" => "Which of the following is NOT a valid variable name in PHP?",
        "options" => ["\$var_name", "\$_var", "\$var-1", "\$var1"],
        "answer" => 2
    ],
    [
        "question" => "Which operator is used for string concatenation in PHP?",
        "options" => ["&", "+", ".", "*"],
        "answer" => 2
    ]
];

$score = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($questions as $index => $question) {
        if (isset($_POST["question$index"]) && $_POST["question$index"] == $question['answer']) {
            $score++;
        }
    }
    $leaderboard = "leaderboard.txt";
    $username = isset($_POST['username']) ? $_POST['username'] : 'Anonymous';
    $entry = "$username: $score\n";
    file_put_contents($leaderboard, $entry, FILE_APPEND);
    
    echo "<h2>Your Score: $score/" . count($questions) . "</h2>";
    echo '<a href="index.php">Try Again</a>';
    echo '<br><a href="leaderboard.php">View Leaderboard</a>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Quiz</title>
  </head>
  <body>
      <h1>PHP Quiz</h1>
      <form method="post" action="">
          <label for="username">Enter Your Name: </label>
          <input type="text" name="username" id="username" required><br><br>
  
          <?php foreach ($questions as $index => $question): ?>
              <fieldset>
                  <legend><?php echo $question['question']; ?></legend>
                  <?php foreach ($question['options'] as $optionIndex => $option): ?>
                      <label>
                          <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $optionIndex; ?>">
                          <?php echo $option; ?>
                      </label><br>
                  <?php endforeach; ?>
              </fieldset>
          <?php endforeach; ?>
          <input type="submit" value="Submit">
      </form>
  </body>
</html>
