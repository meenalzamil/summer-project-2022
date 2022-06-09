<?php
include_once('initialize.php');
function createNewComment($name, $comment, $postId){
    $successfulCommentInsertion = false;
    if (!empty($name) && !empty($comment)){
        $successfulCommentInsertion = dbQuery("
            INSERT INTO comments (name, comment, postId)
            VALUES ('$name', '$comment', '$postId')
        ");
    }
    if ($successfulCommentInsertion){
        return "success";
    }
    else{
        return "error";
    }
}

function createNewPost($location, $content, $dateOfTravel, $tripId){
    global $pdo;
    if (!empty($location) && !empty($content) && !empty($dateOfTravel)){
        $result = dbQuery("
            INSERT INTO post (location, dateOfTravel, content, tripId)
            VALUES ('$location', '$dateOfTravel', '$content', '$tripId')
        ");
    return $newId = $pdo->lastInsertId();
    }
}

function createNewTrip($location, $blurb, $startDate, $endDate){
    global $pdo;
    if(!empty($location) && !empty($blurb) && !empty($startDate) && !empty($endDate)){
        $result = dbQuery("
            INSERT INTO trip (location, blurb, startDate, endDate)
            VALUES ('$location', '$blurb', '$startDate', '$endDate')
        ");
    return $newId = $pdo->lastInsertId();
    }
}
