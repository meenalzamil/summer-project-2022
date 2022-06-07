<?php

function getPosts($tripID){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE tripID = $tripID
    ")->fetchAll();
    return($posts);
}

function getIndividualPost($postID){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE postID = $postID
    ")->fetch();
    return($posts);
}

// function getPost($postID){
//     // $allPosts=getAllPosts();
//     // return $allPosts[$postID];
//     $matchingID = $postID + 1;
//     $individualPost = dbQuery("
//     SELECT *
//     FROM `posts`
//     WHERE postID=$matchingID
//     ")->fetch();
//     return($individualPost);
// }

