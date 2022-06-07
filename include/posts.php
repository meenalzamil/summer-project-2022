<?php

function getPosts($tripID){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE tripID = $tripID
    ")->fetchAll();
    return($posts);
}

function getIndividualPost($postID){
    $posts = dbQuery("
    SELECT *
    FROM `post`
    WHERE postID = $postID
    ")->fetch();
    return($posts);
}