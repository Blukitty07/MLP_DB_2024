<?php

// retrieve the search term
$manecolour_find = mysqli_real_escape_string($dbconnect, $_POST
['colours']);


$where = "
mcl1.Colour_ID = $manecolour_find OR
mcl2.Colour_ID = $manecolour_find

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


// find the category based of the id
$manecolour_heading = get_heading($dbconnect, "colours", "Colour_ID", "Colour", $manecolour_find)

; 

// heading for category dropdown
?>
 <h2> Results for <?php echo $manecolour_heading." mane colour (".$num_results." characters)";?></h2>

<?php


if ($num_results > 0) {
    include("results.php");
}

else {
    ?>
    <div class="error">
        Sorry there were no characters with a 
        "<?php echo $manecolour_heading; ?>" mane colour. </br>

        Please try a different search


    </div>

    <?php
}

