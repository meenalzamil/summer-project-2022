<?php
include_once('include/initialize.php');

$ID = $_REQUEST['postID'];
$success = createNewComment($ID);
if ($success == "success"){
    // echo $success;
    echo "You successfully created a comment!";
    echo "<p><a href='../displayPosts.php?postID=$ID'>&lt; Go View Your New Comment</a></p>";
}
else{
    // echo $success;
    echo "Creation of comment failed.";
    echo "<p><a href='../displayPosts.php?postID=$ID'>&lt; Try Again</a></p>";

}
