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


function makeDropdown($dbconnect, $table, $idField, $valueField, $firstItem, $needed, $searchClass, $selectName = null)
{
    $dropdownSql = "SELECT * FROM `$table` ORDER BY `$valueField` ASC";
    $dropdownQuery = mysqli_query($dbconnect, $dropdownSql);

    if($selectName == null) {
        $selectName = $table;
    }

    // Start of select area

    //if dropdown is required
    if($needed == "yes"){
        echo '<select class='.$searchClass.' name="'. $selectName .'"required>';
    

    // first option 
    echo '<option value="" selected disabled hidden>'. $firstItem .'</option>';
    }

    // If dropdown is optional
    else {
        echo '<select class='.$searchClass.' name="' . $selectName . '">';
        echo '<option value="None" selected hidden>' . $firstItem . '</option>';
    }


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
}

// function to generate drop down boxes
function makeDropdownBox($dbconnect, $table, $idField, $valueField, $pageName, $firstItem) {

    echo '<form class="searchform" method="post" action="index.php?page=$pageName" enctype="multipart/form-data">';

    // make dropdown
    makeDropdown($dbconnect, $table, $idField, $valueField, $firstItem, "yes", "search");

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


// get colours for the dropdown [Chat GPT helped]
function get_colours($dbconnect, $table1, $table2, $idField, $valueField) {
    $colours = [];

    // Get unique mane colour IDs
    $query1 = "SELECT DISTINCT $idField FROM $table1 WHERE $idField IS NOT NULL";
    $result1 = mysqli_query($dbconnect, $query1);

    if (!$result1) {
        die('There was an error executing [query1]: ' . mysqli_error($dbconnect));
    }

    // Collect IDs
    $idList = [];
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $id = intval($row1[$idField]); // Ensure ID is an integer
        if (!in_array($id, $idList)) {
            $idList[] = $id;
        }
    }

    if (empty($idList)) {
        return $colours; // Return empty if no IDs are found
    }

    // Create a comma-separated list of IDs for the query
    $idListStr = implode(',', $idList);

    // get the values that correspond with the IDs from the colours table
    $query2 = "SELECT DISTINCT Colour_ID, $valueField FROM $table2 WHERE Colour_ID IN ($idListStr)";
    $result2 = mysqli_query($dbconnect, $query2);

    if (!$result2) {
        die('There was an error executing [query2]: ' . mysqli_error($dbconnect));
    }

    // get colours and store them in the array, ensuring they're unique
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $id = intval($row2['Colour_ID']); // interger ensuress
        $value = $row2[$valueField];

        // Only add the colour if it is not already in the array
        if (!in_array($value, $colours)) {
            $colours[$id] = $value;
        }
    }

    return $colours;
}


// NEW dropdown function based off of the orignal one that uses the colours for get_colours
function makeDropdowncolours($colours1, $colours2, $table, $idField, $pageName, $firstItem) {

    echo '<form class="searchform" method="post" action="index.php?page=' . $pageName . '" enctype="multipart/form-data">';

    // Start of select area
    echo '<select class="search" name="' . $table . '"required>';

    // First option in the dropdown
    echo '<option value="" selected disabled hidden>' . $firstItem . '</option>';

    // combine and then aplhabetically sort the two colours
    $combinedColours = $colours1 + $colours2;
    asort($combinedColours);

    // Iterate through the combined colours to create options
    foreach ($combinedColours as $id => $value) {
        // Check that value is not 'none'
        if ($value != "none") {
            echo '<option value="' . $id . '">' . $value . '</option>';
        }
    }

    echo '</select>';
    // End of selection area

    // Submit button
    echo '<input class="submit" type="submit" name="' . $table . '_find" value="&#xf002;" formaction="index.php?page=' . $pageName . '" />';

    echo '</form>';
}

?>
