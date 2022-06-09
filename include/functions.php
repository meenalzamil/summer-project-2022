<?php
include_once('initialize.php');
function createNewComment($name, $comment, $postId){
    // $name = $_POST["name"];
    // $comment = $_POST["comment"];
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
    // $successfulPostInsertion = false;
    if (!empty($location) && !empty($content) && !empty($dateOfTravel)){
        $successfulPostInsertion = dbQuery("
        INSERT INTO post (location, dateOfTravel, content, tripId)
        VALUES ('$location', '$dateOfTravel', '$content', '$tripId')
    ");
    }
    if ($successfulPostInsertion){
        return "success";
    }
    else{
        return "error";
    }
}
function createNewTrip($location, $blurb, $startDate, $endDate){
    $result = false;
    if(!empty($location) && !empty($blurb) && !empty($startDate) && !empty($endDate)){
        // if($location != " " && $blurb != " " && $startDate != " " && $endDate != " "){
            $result = dbQuery("
            INSERT INTO trip (location, blurb, startDate, endDate)
            VALUES ('$location', '$blurb', '$startDate', '$endDate')
        ");
        // }
    }
    if ($result){
        return "success";
    }
    else{
        return "error";
    }
}
