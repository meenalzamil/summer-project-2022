<?php
include_once('include/initialize.php');
$location = $_POST["location"];
$blurb = $_POST["blurb"]; 
$startDate = $_POST["startDate"]; 
$endDate = $_POST["endDate"]; 
$xCoordinate = $_POST["xCord"];
$yCoordinate = $_POST["yCord"];


$success = createNewTrip($location, $startDate, $endDate, $xCoordinate, $yCoordinate, $blurb);
if ($success){
    echo "You successfully created a trip!";
    echo "<a href='addTrip.html'>Go back to home page to view</a>";
}
else{
    echo "Creation of trip failed.";
    echo "<a href='addTrip.html'>Go back to home page to try again</a>";

}