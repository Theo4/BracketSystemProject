<?php
include "header.php";
$line = "";

$sql = "SELECT * FROM `hold` WHERE `MedlemID` LIKE '%".$_SESSION['id']."%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$checkForUser = explode("," , $row['MedlemID']);
	foreach ($checkForUser as $value) {
		if($value == $_SESSION['id']) {

		}
	}
}
?>

<h1>CS5v5</h1>

<div class="box">

		<div class="tilmeld">
			<h4>Join turnament</h4>
			<input type="submit" value="Join with team">
		</div>

		<div class="b1">Quarterfinal</div>
<br>
		<div class="b2">Quarterfinal</div>
<br>
		<div class="b3">Quarterfinal</div>
<br>
		<div class="b4">Quarterfinal</div>
<br>
		<div class="b5">Semifinal</div>
<br>
		<div class="b6">Semifinal</div>
<br>
		<div class="b7">Final</div>

</div>

<?php
include "footer.php";
?>