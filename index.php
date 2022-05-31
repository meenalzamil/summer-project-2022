<?php
    include_once ('include/initialize.php');
    foreach(getAllPosts() as $postID => $post){
        echo"
        <div class = 'recentPost'>
            <a href='displayPosts.php?postID=$postID'>$post[title]</a>
            <div>$post[content]</div>
        ";
    }
    ?>

    <!-- //loop through the sections and echo the block for each section, from here loop through -->

