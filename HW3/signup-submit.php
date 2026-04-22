<?php
// signup-submit.php
// Receives form data and saves new user to singles.txt

include("common.php");
top();

// get form data
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$personality = $_POST["personality"];
$os = $_POST["os"];
$min = $_POST["min"];
$max = $_POST["max"];

// format line for file
$line = "$name,$gender,$age,$personality,$os,$min,$max\n";

// append to file
file_put_contents("singles.txt", $line, FILE_APPEND);
?>

<h2>Thank you!</h2>

<p>
    Welcome to NerdieLuv, <?= htmlspecialchars($name) ?>!
</p>

<p>
    Now <a href="matches.php">log in to see your matches!</a>
</p>

<?php
bottom();
?>