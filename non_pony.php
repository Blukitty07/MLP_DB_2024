<?php

$where = "
p.non_pony = 1

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


?>

<h2>Non-Pony Characters</h2>
<h3>Characters who are species other than pony</h3>


<?php

include("results.php")

?>