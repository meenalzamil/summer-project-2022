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

function createNewTrip($location, $startDate, $endDate, $xCoord, $yCoord, $xLength, $yLength, $filePath){
    global $pdo;
    if(!empty($location) && !empty($startDate) && !empty($endDate) && isset($xCoord)  && isset($yCoord) && isset($xLength)  && isset($yLength) && $filePath!=""){
        $result = dbQuery("
            INSERT INTO trip (location, startDate, endDate, xCoordinate, yCoordinate, totalXLength, totalYLength, filePath)
            VALUES ('$location', '$startDate', '$endDate', '$xCoord', '$yCoord', '$xLength', '$yLength', '$filePath')
        ");
    return $newId = $pdo->lastInsertId();
    }
}
