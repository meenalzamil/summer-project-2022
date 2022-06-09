<?php
include_once('include/initialize.php');
$location = $_POST["location"];
$blurb = $_POST["blurb"]; 
$startDate = $_POST["startDate"]; 
$endDate = $_POST["endDate"]; 

$success = createNewTrip($location, $blurb, $startDate, $endDate);
if ($success){
    echo "You successfully created a trip!";
    echo "<a href=index.php>Go back to home page to view</a>";
}
else{
    echo "Creation of trip failed.";
    echo "<a href=index.php>Go back to home page to try again</a>";

}