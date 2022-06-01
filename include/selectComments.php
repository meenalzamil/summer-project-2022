<?php
// include_once ('include/initialize.php');

function getAllComments(){
    $allComments = dbQuery("
    SELECT * 
    FROM `comments` 
    ORDER BY datePosted
    ")->fetchAll();
    return ($allComments);
}

// echo"
//     <p><a href='index.php'>&lt; Return to the home page</a></p>
// ";

// foreach(getAllComments() as $commentID => $comment){
//     echo"
//         <h1>$comment['name']<h1>
//         <div>$comment['summary']</div>
//         <div>$comment['datePosted']</div>
//     ";
// }

// foreach(getAllPosts() as $postID => $post){
//     if ($postID == 3){
//         break;
//     }
//     echo"
//     <div class='space'>
//         <a style='color: #B082A0' href='displayPosts.php?postID=$postID'><h2 class='blockTwoColor'>$post[title]</h2></a>
//         <div class='aboutMe'>$post[summary]</div>
//     </div>
//     ";
// }