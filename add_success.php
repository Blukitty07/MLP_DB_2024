<?php
 
// if users have submitted retrieve the information from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// get the values form the form
	$character_name = mysqli_real_escape_string($dbconnect, $_POST['character_name']);
	$non_pony = mysqli_real_escape_string($dbconnect, $_POST['non_pony']);
	$main_character = mysqli_real_escape_string($dbconnect, $_POST['main_character']);
	$Category = mysqli_real_escape_string($dbconnect, $_POST['Category']);
	$Residence = mysqli_real_escape_string($dbconnect, $_POST['Residence']);
	$ManeColour = mysqli_real_escape_string($dbconnect, $_POST['ManeColour']);
	$ManeColour2 = mysqli_real_escape_string($dbconnect, $_POST['ManeColour2']);
	$BodyColour = mysqli_real_escape_string($dbconnect, $_POST['BodyColour']);
	$BodyColour2 = mysqli_real_escape_string($dbconnect, $_POST['BodyColour2']);
	$description = mysqli_real_escape_string($dbconnect, $_POST['description']);
	
	// Set mane colour 2 and body colour 2 to 1 [n/a] if it's blank
	if ($ManeColour2 == "None") {
		$ManeColour2 = 1;
	}
	
	if ($BodyColour2 == "None") {
		$BodyColour2 = 1;
	}
	
// check no duplicates
$where = " p.pony_name = '$character_name' 

";

$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);

// If country name already exists, show users
if ($num_results > 0) {
	header('Location: index.php?page=duplicate_results&Pony='. $character_name);
	die();
}
	
	
// add entry to database
$addentry_sql = "INSERT INTO `ponies` (`ID`, `pony_name`, `non_pony`, `main_character`, `Category_ID`, `mane_colour1_ID`, `mane_colour2_ID`, `body_colour1_ID`, `body_colour2_ID`, `Residence_ID`, `Description`) VALUES (NULL, '$character_name', '$non_pony', '$main_character', '$Category', '$ManeColour', '$ManeColour2', '$BodyColour', '$BodyColour2', '$Residence', '$description');";
	
//$addentry_sql = "INSERT INTO `ponies` (`ID`, `pony_name`, `non_pony`, `main_character`, `Category_ID`, `mane_colour1_ID`, `mane_colour2_ID`, `body_colour1_ID`, `body_colour2_ID`, `Residence_ID`, `Description`) VALUES (NULL, 'Bob', '1', '1', '3', '4', '5', '6', '7', '8', 'This is a test');";
$add_entery_query = mysqli_query($dbconnect, $addentry_sql);


}

// If not supposed to be on this page send them to home page
else {
	header('Location: index.php?page=home');
}

$where = " p.pony_name = '$character_name' 

";




?>




<h2> Thank You For Your Contribution </h2>

<p> Your entry has been added </p>

<?php

include("results.php");


?>

