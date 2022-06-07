<?php

function getComments($postID){
    $comments = dbQuery("
    SELECT *
    FROM `comments`
    WHERE postID = $postID
    ")->fetchAll();
    return($comments);
}