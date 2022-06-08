<?php
include_once('include/initialize.php');
echoHeader();

$ID = $_REQUEST['tripID'];
$success = createNewPost($ID);
if ($success == "success"){
    echo $success;
    echo "You successfully created a post!";
    echo "<p style='font-size: 10px'><a href='../displayTrips.php?tripID=$ID'>&lt; Go View Your New Post</a></p>";
}
else{
    echo $success;
    echo "Creation of post failed.";
    echo "<p style='font-size: 10px'><a href='../displayTrips.php?tripID=$ID'>&lt; Try Again</a></p>";

}
footer();