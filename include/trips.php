<?php
function getAllTrips(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `trip` 
    ORDER BY startDate

    ")->fetchAll();
    return ($allPosts);
}
    // ORDER BY startDate

