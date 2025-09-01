<!DOCTYPE HTML>

<?php

include("config.php");
include("functions.php");

// connect to database
$dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()) {
    echo "Connection Failed: ".mysqli_connect_error();
    exit;
}

?>


<html lang="en">
    
<?php include("head.php"); ?>

<body>
    
    <p class="message">Eek!  Your browser does not support grid.  Please upgrade your system.</p>
        
    <div class="wrapper">
    
        <?php include ("box_logo.php"); ?>     

        <div class="box main">

        <?php 
        
        if(!isset($_REQUEST['page'])) {
            include("home.php");
        } // end of it that includedes home page
    
        else{
            $page=preg_replace('/[^0-9a-z-A-Z]-/', '', $_REQUEST['page']);
            include("$page.php");
        }
        
        ?>

            
        </div> <!-- / main -->
        
        <?php include("search_area.php"); ?>
        
        <?php include("footer.php"); ?>
                
        
    </div> <!-- / wrapper -->
    
            
</body>