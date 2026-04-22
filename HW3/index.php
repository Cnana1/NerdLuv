<?php
// index.php - Front page of NerdieLuv
// Links to signup and matches pages

include("common.php");
top();
?>

<div class="container">
    <h2>Welcome to NerdieLuv!</h2>

    <p>
        Are you a single nerd looking for love? NerdieLuv is the premier dating site
        for geeks, gamers, and tech enthusiasts. Sign up today and find your perfect match!
    </p>

    <div>
        <p>
            <a href="signup.php">
                <img src="assets/signup.jpg" alt="Sign Up" style="height: 25px; width: 25px;"> Signup
            </a>
        </p>

        <p>
            <a href="matches.php">
                <img src="assets/heart.jpg" alt="View Matches" style="height: 25px; width: 30px;">
                View Matches
            </a>
        </p>
    </div>
</div>

<?php
bottom();
?>