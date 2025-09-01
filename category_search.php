<?php

// retrieve the search term
$category_find = mysqli_real_escape_string($dbconnect, $_POST
['category']);


$where = "
p.Category_ID = $category_find

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


// find the category based of the id
$category_heading = get_heading($dbconnect, "category", "Category_ID", "Catergory", $category_find)

; 

// heading for category dropdown
?>
 <h2> Results for Category: <?php echo $category_heading." (".$num_results." characters)";?></h2>

<?php


if ($num_results > 0) {
    include("results.php");
}

else {
    ?>
    <div class="error">
        Sorry there were no results for 
        <?php echo $category_heading; ?>.
    </div>

    <?php
}

