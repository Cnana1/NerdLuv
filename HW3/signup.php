<?php
// signup.php - form for creating a new account

include("common.php");
top();
?>

<h2>Sign Up for NerdieLuv</h2>

<form action="signup-submit.php" method="post">

    <!-- Name -->
    <fieldset>
        <legend>New User Signup:</legend>

        <label>Name:</label>
        <input type="text" name="name" size="16" maxlength="16" required />
        <br />

        <!-- Gender -->
        <label>Gender:</label>
        <input type="radio" name="gender" value="M" /> Male
        <input type="radio" name="gender" value="F" checked /> Female
        <br />

        <!-- Age -->
        <label>Age:</label>
        <input type="text" name="age" size="6" maxlength="2" required />
        <br />

        <!-- Personality -->
        <label>
            Personality type:
            (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp" target="_blank">Don't know your type?</a>)
        </label>
        <input type="text" name="personality" size="6" maxlength="4" required />
        <br />

        <!-- Favorite OS -->
        <label>Favorite OS:</label>
        <select name="os">
            <option selected>Windows</option>
            <option>Mac OS X</option>
            <option>Linux</option>
        </select>
        <br />

        <!-- Seeking Age -->
        <label>Seeking age:</label>
        <input type="text" name="min" size="6" maxlength="2" placeholder="min" required />
        to
        <input type="text" name="max" size="6" maxlength="2" placeholder="max" required />
        <br />

        <!-- Submit -->
        <input type="submit" value="Sign Up" />

    </fieldset>
</form>

<?php
bottom();
?>