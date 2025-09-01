<h2>All Results</h2>

<?php

// p = pony data
// r = residence
// c = catergory
// mcl1 and mcl2 are for the two mane colours limit
// bcl1 and bcl2 are for the two body colours limit



$find_sql = "SELECT
p.*,
r.*,
c.*,
mcl1.Colour AS ManeColour1,
mcl2.Colour AS ManeColour2,
bcl1.Colour AS BodyColour1,
bcl2.Colour AS BodyColour2

FROM 
ponies p 
JOIN residence r ON r.Residence_ID = p.Residence_ID
JOIN category c ON c.Category_ID = p.Category_ID
JOIN colours mcl1 ON p.mane_colour1_ID = mcl1.Colour_ID
JOIN colours mcl2 ON p.mane_colour2_ID = mcl2.Colour_ID
JOIN colours bcl1 ON p.body_colour1_ID = bcl1.Colour_ID
JOIN colours bcl2 ON p.body_colour2_ID = bcl2.Colour_ID
ORDER BY p.`pony_name` ASC
";


$find_query = mysqli_query($dbconnect, $find_sql);

// loop through the results and display theme
while($find_rs=mysqli_fetch_assoc($find_query))

{

    // Set up Mane Colours
    $manecolour_1 = $find_rs['ManeColour1'];
    $manecolour_2 = $find_rs['ManeColour2'];

    // Set up Body Colours
    $bodycolour_1 = $find_rs['BodyColour1'];
    $bodycolour_2 = $find_rs['BodyColour2'];


    // Colour ID 1 is n/a [ie: no colour] for Mane
    if($find_rs['mane_colour2_ID'] == 1) {
        $sub_heading = "Mane Colour: ";
        $manecolours = $manecolour_1;
    }

    else {
        $sub_heading = "Mane Colours: ";
        $manecolours = $manecolour_1." and ".$manecolour_2;

    }

    // Colour ID 1 is n/a [ie: no colour] for Body
    if($find_rs['body_colour2_ID'] == 1) {
        $sub_heading2 = "Body Colour: ";
        $bodycolours = $bodycolour_1;
    }

    else {
        $sub_heading2 = "Body Colours: ";
        $bodycolours = $bodycolour_1." and ".$bodycolour_2;

    }

    ?>

    <div class="results">
        <h2><?php echo $find_rs['pony_name']; ?>
    <i>(<?php  echo $find_rs['Catergory']; ?>)</i>
    </h2>

    <p>
        <b>Residence: </b> <?php echo $find_rs['Residence']; ?><br/></p>

    <p>
        <b><?php echo $sub_heading; ?></b> <?php echo $manecolours; ?><br/>
        <b><?php echo $sub_heading2; ?></b> <?php echo $bodycolours; ?><br/>
    
    <p>
        <b><?php echo $find_rs['Description']; ?></b></p>

    </div>
    <br />

    <?php

}

?>

