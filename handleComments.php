<?php
include_once('include/initialize.php');
function createNewComment($postID){
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $successfulCommentInsertion = false;
    if (!empty($name) && !empty($comment)){
        $successfulCommentInsertion = dbQuery("
        INSERT INTO comments (name, comment, postID)
        VALUES ('$name', '$comment', '$postID')
    ");
    }
    if ($successfulCommentInsertion){
        return "success";
    }
    else{
        return "error";
    }
}
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
