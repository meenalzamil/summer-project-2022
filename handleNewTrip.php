<?php
include_once('include/initialize.php');
echoHeader();

$success = createNewTrip();
if ($success == "success"){
    // echo $success;
    echo "You successfully created a trip!";
    echo "<a style='font-size: 10px' href=index.php>Go back to home page to view</a>";
}
else{
    // echo $success;
    echo "Creation of trip failed.";
    echo "<a  style='font-size: 10px' href=index.php>Go back to home page to try again</a>";

}
footer();