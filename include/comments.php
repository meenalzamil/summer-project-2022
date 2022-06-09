<?php

function getComments($postId){
    $comments = dbQuery("
        SELECT *
        FROM `comments`
        WHERE postId = $postId
    ")->fetchAll();
    return($comments);
}