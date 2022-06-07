<?php
function getAllTrips(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `trip` 
    ORDER BY startDate
    ")->fetchAll();
    return ($allPosts);
}

function getAllPosts(){
    // $allPosts=getAllPosts();
    // return $allPosts[$postID];
   // $matchingID = $tripID + 1;
    $posts = dbQuery("
    SELECT *
    FROM `post`
    ORDER BY dateOfTravel
    ")->fetchAll();
    return($posts);
}