<?php
// common.php
// Contains shared header and footer functions for NerdieLuv pages

function top() {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NerdieLuv</title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
</head>

<body>
    <div id="banner">
        <img src="assets/nerdluv.png" alt="nerdluv">
        <p>Where geeks meet</p>
    </div>

<?php
}

function bottom() {
?>
    <div id="footer">
        <p>
            This page is for single nerds to meet and date each other!
            Type in your personal information and wait for the nerdly love to begin!<br>Thank you for using our site.<br><br>Results and page (C) Copyright NerdLuv Inc.
        </p>

        <!-- Back to front page link with image -->
        <p>
            <a href="index.php">
                <img src="assets/back.png" alt="Back to front page" style="vertical-align: middle; width: 25px; height: 25px;" />
                Back to front page
            </a>
        </p>

        <p>
            <a href="https://validator.w3.org/nu/#textarea">
        <img src="https://www.w3.org/Icons/valid-html401" alt="Valid HTML!" />
    </a>
            <a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
        </p>
    </div>
</body>
</html>
<?php
}
?>