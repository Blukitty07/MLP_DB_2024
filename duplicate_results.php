<?php

// Send user to home page if they're tryin to browse the directory
if(!isset($_REQUEST['pony_name']))
{
	header('Location: index.php');
}

else {
	$character_name = $_REQUEST['pony_name'];
	
	$where = "
	p.pony_name LIKE '$character_name'
	";
	
	$find_query = get_query($dbconnect, $where);

}

?>

<h2>Sorry, but that entry already exists</h2>
<div class="error">
This character entry for <?php echo $character_name; ?> is below</div>

<br /><br />
<?php
	include("results.php");
?>
