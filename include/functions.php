<?php
include_once('initialize.php');

function createNewComment($postID){
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $successfulCommentInsertion = false;
    if (!empty($name) && !empty($comment)){
        $successfulCommentInsertion = dbQuery("
        INSERT INTO comments (name, comment, postID)
        VALUES ('$name', '$comment', '$postID')
    ");
    }
    if ($successfulCommentInsertion){
        return "success";
    }
    else{
        return "error";
    }
}

function createNewPost($tripID){
    $location = $_POST["location"];
    $content = $_POST["content"];
    $dateOfTravel = $_POST["dateOfTravel"];

    $successfulPostInsertion = false;
    if (!empty($location) && !empty($content) && !empty($dateOfTravel)){
        $successfulPostInsertion = dbQuery("
        INSERT INTO post (location, dateOfTravel, content, tripID)
        VALUES ('$location', '$dateOfTravel', '$content', '$tripID')
    ");
    }
    if ($successfulPostInsertion){
        return "success";
    }
    else{
        return "error";
    }
}

function createNewTrip(){
    $location = $_POST["location"];
    $blurb = $_POST["blurb"]; 
    $startDate = $_POST["startDate"]; 
    $endDate = $_POST["endDate"]; 
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
