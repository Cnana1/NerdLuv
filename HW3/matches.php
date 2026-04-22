<?php
// matches.php - login form to view matches

include("common.php");
top();
?>

<h2>View Your Matches</h2>

<form action="matches-submit.php" method="get">
    
    <fieldset>
        <legend>Returning User:</legend>

        <label>Name:</label>
        <input type="text" name="name" size="16" required />
        <br />

        <input type="submit" value="View My Matches" />

    </fieldset>

</form>

<?php
bottom();
?>