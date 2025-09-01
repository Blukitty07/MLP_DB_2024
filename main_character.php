<?php

$where = "
p.main_character = 1

";


$find_query = get_query($dbconnect, $where);
$num_results = mysqli_num_rows($find_query);


?>

<h2>Main Characters</h2>
<h3>Main Characters from Generation 4 and 5</h3>


<?php

include("results.php")

?>