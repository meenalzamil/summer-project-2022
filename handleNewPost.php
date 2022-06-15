<?php
include_once('include/initialize.php');
$location = $_POST["location"];
$content = $_POST["content"];
$dateOfTravel = $_POST["dateOfTravel"];
$tripId = $_REQUEST['tripId'];


$success = createNewPost($location, $content, $dateOfTravel, $tripId);

if ($success){
    echo "You successfully created a post!";
    echo "<p><a href='../displayTrips.php?tripId=$tripId'>&lt; Go View Your New Post</a></p>";
}
else{
    echo "Creation of post failed.";
    echo "<p><a href='../displayTrips.php?tripId=$tripId'>&lt; Try Again</a></p>";

}
