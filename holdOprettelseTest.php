<?php
include "header.php";
$line = "";

if(isset($_GET['error'])) {
    if ($_GET['error'] == "name") {
        $line .= "A team with this name already exists";
    }
    if ($_GET['error'] == "dup") {
        $line .= "The same player cant hold multiple spots on a team";
    }
    if ($_GET['error'] == "nous") {
        $line .= "You tried to add a user that does not exist";
    }
}


?>

<h1>Test</h1>

<div class="box">
	<div class="secondBox">
<h2>Create team:</h2>
<form action="teamregister.php" method="POST">
    Team name: <br><input type="text" name="teamName" required> <br><br>
    Team member id: <br><input type="text" name="id1" required> <br>
    Team member id: <br><input type="text" name="id2"> <br>
    Team member id: <br><input type="text" name="id3"> <br>
    Team member id: <br><input type="text" name="id4"> <br>
    Team member id: <br><input type="text" name="id5"> <br>
    Team member id: <br><input type="text" name="id6"> <br>

    <button type="submit" value="Create">Create</button>
    <button type="submit" value="Cancel">Cancel</button>
</form>



<?php
echo $line;
include "footer.php";
?>