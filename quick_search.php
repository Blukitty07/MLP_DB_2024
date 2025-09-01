<?php

$quick_find = mysqli_real_escape_string($dbconnect, $_POST
['quick_search']);


?>

<h2>Quick Search Results (Search Term: <?php echo $quick_find; ?>)</h2>

<?php


$where = "
r.Residence LIKE '%$quick_find%'
OR p.pony_name LIKE '%$quick_find%'

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);

if ($num_results > 0) {

    include("results.php");

}

else {
    ?>
    <div class="error">
        Sorry there were no results for <?php echo $quick_find; ?>.

    </div>

    <?php
}

