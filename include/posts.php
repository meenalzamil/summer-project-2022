<?php

function getPosts($tripId){
    $posts = dbQuery("
        SELECT *
        FROM `post`
        WHERE tripId = $tripId
    ")->fetchAll();
    return($posts);
}

function getIndividualPost($postId){
    $posts = dbQuery("
        SELECT *
        FROM `post`
        WHERE postId = $postId
    ")->fetch();
    return($posts);
}

