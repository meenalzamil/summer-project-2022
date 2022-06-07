<?php
function getAllTrips(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `trip` 
    ORDER BY startDate
    ")->fetchAll();
    return ($allPosts);
}

function getPosts($tripID){
    // $allPosts=getAllPosts();
    // return $allPosts[$postID];
    $matchingID = $tripID + 1;
    $individualPost = dbQuery("
    SELECT *
    FROM `post`
    WHERE tripID=$matchingID
    ")->fetch();
    return($individualPost);
}