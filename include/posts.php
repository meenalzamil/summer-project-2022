<?php

function getPosts($tripId){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE tripId = $tripId
    ")->fetchAll();
    return($posts);
}

function getIndividualPost($postId){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE postId = $postId
    ")->fetch();
    return($posts);
}

// function getPost($postId){
//     // $allPosts=getAllPosts();
//     // return $allPosts[$postId];
//     $matchingID = $postId + 1;
//     $individualPost = dbQuery("
//     SELECT *
//     FROM `posts`
//     WHERE postId=$matchingID
//     ")->fetch();
//     return($individualPost);
// }

