<?php

// retrieve the search term
$bodycolour_find = mysqli_real_escape_string($dbconnect, $_POST
['colours']);


$where = "
bcl1.Colour_ID = $bodycolour_find OR
bcl2.Colour_ID = $bodycolour_find

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


// find the category based of the id
$bodycolour_heading = get_heading($dbconnect, "colours", "Colour_ID", "Colour", $bodycolour_find)

; 

// heading for category dropdown
?>
 <h2> Results for <?php echo $bodycolour_heading." body colour (".$num_results." characters)";?></h2>

<?php


if ($num_results > 0) {
    include("results.php");
}

else {
    ?>
    <div class="error">
        Sorry there were no characters with a 
        "<?php echo $bodycolour_heading; ?>" body colour. </br>

        Please try a different search


    </div>

    <?php
}

