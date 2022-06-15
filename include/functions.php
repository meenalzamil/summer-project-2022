<?php
include_once('initialize.php');
function createNewComment($name, $comment, $postId){
    global $pdo;
    if (!empty($name) && !empty($comment)){
        dbQuery("
            INSERT INTO comments (name, comment, postId)
            VALUES ('$name', '$comment', '$postId')
        ");
        return $newId = $pdo->lastInsertId();
    }
}

function createNewPost($location, $content, $dateOfTravel, $tripId){
    global $pdo;
    if (!empty($location) && !empty($content) && !empty($dateOfTravel)){
        dbQuery("
            INSERT INTO post (location, dateOfTravel, content, tripId)
            VALUES ('$location', '$dateOfTravel', '$content', '$tripId')
        ");
    return $newId = $pdo->lastInsertId();
    }
}

function createNewTrip($location, $blurb, $startDate, $endDate, $xCoord, $yCoord){
    global $pdo;
    if(!empty($location) && !empty($blurb) && !empty($startDate) && !empty($endDate) && isset($xCoord)  && isset($yCoord)){
        $result = dbQuery("
            INSERT INTO trip (location, blurb, startDate, endDate, xCoordinate, yCoordinate)
            VALUES ('$location', '$blurb', '$startDate', '$endDate', '$xCoord', '$yCoord')
        ");
    return $newId = $pdo->lastInsertId();
    }
}

