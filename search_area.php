
<div class="box side"> <!-- side bar-->

<p>
   <a class="button side button_one" href="index.php?
   page=showall">Show all</a>
</p>



<!-- Quick Search Form -->
<form class="searchform" method="post" action="index.php?page=quick_search"
enctype="multipart/form-data">

   <input class="search" type="text" name="quick_search" required value=""
   placeholder="Quick Search" />

   <input class="submit" type="submit" name="quick_find" 
   value="&#xf002;" />

</form>

<!-- Category Drop Down -->
<?php
   makeDropdownBox($dbconnect, 'category', 'Category_ID', 'Catergory', 'category_search',
   'Category');
?>

<!-- Residence Drop Down -->
<?php
   makeDropdownBox($dbconnect, 'residence', 'Residence_ID', 'Residence', 'residence_search',
   'Residence');
?>

<!-- Mane Colour Drop Down -->
<?php
   // get the correct colours
   $mane_colours = get_colours($dbconnect, 'ponies', 'colours', 'mane_colour1_ID', 'Colour');
   $mane_colours_second = get_colours($dbconnect, 'ponies', 'colours', 'mane_colour2_ID', 'Colour');
   
   // NEW dropdown using the colours
   makeDropdowncolours($mane_colours, $mane_colours_second, 'colours', 'Colour_ID', 'manecolour_search', 'Mane Colours');
?>


<!-- Body Colour Drop Down -->
<?php
   // get the correct colours
   $body_colours = get_colours($dbconnect, 'ponies', 'colours', 'body_colour1_ID', 'Colour');
   $body_colours_thesequel = get_colours($dbconnect, 'ponies', 'colours', 'body_colour2_ID', 'Colour');
   
   // NEW dropdown using the colours
   makeDropdowncolours($body_colours, $body_colours_thesequel, 'colours', 'Colour_ID', 'bodycolour_search', 'Body Colours');
?>

<!-- Main Charcater Search -->
<p>
   <a class="button side button_one" href="index.php?page=main_character">Main Characters</a>
</p>



<p>
   <a class="button side button_one" href="index.php?page=non_pony">Non Pony Characters</a>
</p>



<p>
   <a class="button side button_two" href="index.php?page=add_entry"> Add Entry </a>



</div> <!-- / side bar -->
