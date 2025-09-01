<div class="add-form">
<h2> Add An Entry </h2>
<p> Please use the form below to add a My Little Pony charcater to the database</p>

<form method="post" enctype="multipart/form-data" action="<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=add_success"); ?>">

<!-- Character Name (required) -->
<input class="add-field" type="text" name="character_name" value = ""
Placeholder = "Character Name (required)" required/>

<!-- Non pony (required) -->
<p>
Is their species not a pony [example: Griffon, Dragon, Zebra]
<select class="add-dropdown" name="non_pony">
	<option value="0" selected>Character is a pony</option>
	<option value="1">Character is a not pony</option>
</select>
</p>

<!-- Main character (required) -->
<p>
    Are they a Main Character?
<select class="add-dropdown" name="main_character">
	<option value="0" selected>Character is not a Main Character</option>
	<option value="1">Character is a Main Character</option>
</select>
</p>

<!-- Category (required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'category', 'Category_ID', 'Catergory', 'Choose Cateogry (required)',
    'yes', 'add-dropdown', 'Category')?>
</p>

<!-- Residence (required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'residence', 'Residence_ID', 'Residence', 'Choose Residence (required)',
    'yes', 'add-dropdown', 'Residence')?>
</p>

<!-- Mane Colour 1 (required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'colours', 'Colour_ID', 'Colour', 'Choose primary mane colour (required)',
     'yes', 'add-dropdown', 'ManeColour')?>
</p>

<!-- Mane Colour 2 (non-required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'colours', 'Colour_ID', 'Colour', 'Choose secondary mane colour (optional)',
     'no', 'add-dropdown', 'ManeColour2')?>
</p>

<!-- Body Colour 1 (required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'colours', 'Colour_ID', 'Colour', 'Choose primary body colour (required)',
     'yes', 'add-dropdown', 'BodyColour')?>
</p>

<!-- Body Colour 2 (non-required) -->
<p>
    <?php
    makeDropdown($dbconnect, 'colours', 'Colour_ID', 'Colour', 'Choose secondary body colour (optional)',
     'no', 'add-dropdown', 'BodyColour2')?>
</p>

<!-- Description (required) -->
<p>
    write a small description [limit of 92 charcters]
    <input class="add-field" maxlength="92" type="text" name="description" required/>

</p>

<!-- Submit button -->
<p>
    <input class="add-field" type="submit" value = "Submit" />
</p>

</form>


</div>

