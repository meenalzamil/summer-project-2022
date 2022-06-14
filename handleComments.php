<?php
include_once('include/initialize.php');

$postId = $_REQUEST['postId'];
$name = $_POST["name"];
$comment = $_POST["comment"];

$success = createNewComment($name, $comment, $postId);

if ($success){
    echo "You successfully created a comment!";
    echo "<p><a href='../displayPosts.php?postId=$postId'>&lt; Go View Your New Comment</a></p>";
}
else{
    echo "Creation of comment failed.";
    echo "<p><a href='../displayPosts.php?postId=$postId'>&lt; Try Again</a></p>";

}
