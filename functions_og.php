<?php

function get_query($dbconnect, $where_condition)
{
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

    

    ";


    // Concatenate the WHERE condition to the query
    $find_sql .= " WHERE " . $where_condition;

    $find_query = mysqli_query($dbconnect, $find_sql);
    return $find_query;

}

// function to generate drop down boxes
// Made with the help of Chat GPT
function makeDropdown($dbconnect, $table, $idField, $valueField, $pageName, $firstItem) {

	echo '<form class="searchform" method="post" action="index.php?page=$pageName" enctype="multipart/form-data">';

    $dropdownSql = "SELECT * FROM `$table` ORDER BY `$valueField` ASC";
    $dropdownQuery = mysqli_query($dbconnect, $dropdownSql);

	// Start of select area
    echo '<select class="search" name="' . $table . '">';

	// first option 
	echo '<option value="" selected>' . $firstItem . '</option>';

	// iterate through DB to create options
    while ($dropdownRs = mysqli_fetch_assoc($dropdownQuery)) {

        // check that value is not 'none'
        if($dropdownRs[$valueField]!= "none") {

        echo '<option value="' . $dropdownRs[$idField] . '">' . 
        $dropdownRs[$valueField] . '</option>';
    
        }

    
    
    }

    echo '</select>';
	// end of selection area

	// submit button
    echo '<input class="submit" type="submit" name="' . $table . '_find" value="&#xf002;" formaction="index.php?page=' . $pageName . '" />';

	echo '</form>';
}


// Retrieve heading based o\n ID number
function get_heading($dbconnect, $table, $idField, $valueField, $to_find) {
	$heading_sql = "SELECT * FROM $table WHERE $idField = $to_find";
	$heading_query = mysqli_query( $dbconnect, $heading_sql);
	$heading_rs = mysqli_fetch_assoc( $heading_query);

	$heading_name = $heading_rs [ $valueField];
	return $heading_name;

}


?>
