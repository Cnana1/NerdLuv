<?php
// matches-submit.php
// Displays matches for a given user

include("common.php");
top();

// get name from GET
$name = $_GET["name"];

// read file into array
$lines = file("singles.txt");

// find the user
$user = null;

foreach ($lines as $line) {
    $data = explode(",", trim($line));
    if ($data[0] === $name) {
        $user = $data;
        break;
    }
}

// helper function for personality match
function personalityMatch($p1, $p2) {
    for ($i = 0; $i < 4; $i++) {
        if ($p1[$i] === $p2[$i]) {
            return true;
        }
    }
    return false;
}
?>

<h2>Matches for <?= htmlspecialchars($name) ?></h2>

<?php
// loop through all users to find matches
foreach ($lines as $line) {
    $match = explode(",", trim($line));

    // skip self
    if ($match[0] === $user[0]) {
        continue;
    }

    // condition 1: opposite gender
    $genderMatch = $match[1] !== $user[1];

    // condition 2: age compatibility
    $ageMatch =
        $match[2] >= $user[5] && $match[2] <= $user[6] &&
        $user[2] >= $match[5] && $user[2] <= $match[6];

    // condition 3: same OS
    $osMatch = $match[4] === $user[4];

    // condition 4: personality match
    $personalityMatch = personalityMatch($user[3], $match[3]);

    if ($genderMatch && $ageMatch && $osMatch && $personalityMatch) {
?>

<div class="match">
    <p>
        <img src="assets/usermatch.png" alt="user" width="150" />
        <?= htmlspecialchars($match[0]) ?>
    </p>

    <ul>
        <li><strong>Gender:</strong> <?= htmlspecialchars($match[1]) ?></li>
        <li><strong>Age:</strong> <?= htmlspecialchars($match[2]) ?></li>
        <li><strong>Type:</strong> <?= htmlspecialchars($match[3]) ?></li>
        <li><strong>OS:</strong> <?= htmlspecialchars($match[4]) ?></li>
    </ul>
</div>

<?php
    }
}

bottom();
?>