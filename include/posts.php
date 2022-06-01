<?php
function getAllPosts(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `posts` 
    ORDER BY datePosted
    ")->fetchAll();
    return ($allPosts);
}

function getPost($postID){
    // $allPosts=getAllPosts();
    // return $allPosts[$postID];
    $matchingID = $postID + 1;
    $individualPost = dbQuery("
    SELECT *
    FROM `posts`
    WHERE postID=$matchingID
    ")->fetch();
    return($individualPost);
}

function getSection($postID){
    $allPosts=getAllPosts();
    $post = $allPosts[$postID];
    return $post['sectionNumber'];
}
//get sections 
//get posts in section
//get post 

//database--> make a table called sections and a table called posts and posts will have some kind fo section numnber    