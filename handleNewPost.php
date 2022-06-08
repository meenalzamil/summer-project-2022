<?php
include_once('include/initialize.php');
function createNewPost($tripID){
    $location = $_POST["location"];
    $content = $_POST["content"];
    $dateOfTravel = $_POST["dateOfTravel"];

    $successfulPostInsertion = false;
    if (!empty($location) && !empty($content) && !empty($dateOfTravel)){
        $successfulPostInsertion = dbQuery("
        INSERT INTO post (location, dateOfTravel, content, tripID)
        VALUES ('$location', '$dateOfTravel', '$content', '$tripID')
    ");
    }
    if ($successfulPostInsertion){
        return "success";
    }
    else{
        return "error";
    }
}
$ID = $_REQUEST['tripID'];
$success = createNewPost($ID);
if ($success == "success"){
    echo $success;
    echo "You successfully created a post!";
    echo "<p><a href='../displayTrips.php?tripID=$ID'>&lt; Go View Your New Post</a></p>";
}
else{
    echo $success;
    echo "Creation of post failed.";
    echo "<p><a href='../displayTrips.php?tripID=$ID'>&lt; Try Again</a></p>";

}
