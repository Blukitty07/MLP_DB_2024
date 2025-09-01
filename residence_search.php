<?php

// retrieve the search term
$residence_find = mysqli_real_escape_string($dbconnect, $_POST
['residence']);


$where = "
p.Residence_ID = $residence_find

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


// find the category based of the id
$residence_heading = get_heading($dbconnect, "residence", "Residence_ID", "Residence", $residence_find)

; 

// heading for category dropdown
?>
 <h2> Results for Residence: <?php echo $residence_heading." (".$num_results." characters)";?></h2>

<?php


if ($num_results > 0) {
    include("results.php");
}

else {
    ?>
    <div class="error">
        Sorry there were no results for 
        <?php echo $residence_heading; ?>.
    </div>

    <?php
}

