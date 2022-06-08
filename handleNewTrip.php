<?php
include_once('include/initialize.php');

$success = createNewTrip();
if ($success == "success"){
    // echo $success;
    echo "You successfully created a trip!";
    echo "<a href=index.php>Go back to home page to view</a>";
}
else{
    // echo $success;
    echo "Creation of trip failed.";
    echo "<a href=index.php>Go back to home page to try again</a>";

}