<?php
    include_once ('include/initialize.php');
    echoHeader();
    firstBlock();
    breaks();
    blocks();
    image($backgroundImage='backgroundTwo');
    foreach(getAllPosts() as $postID => $post){
        if ($postID == 3){
            exit;
        }
        echo"
        <div class='block'>
            <a class='linking' href='displayPosts.php?postID=$postID'><h2 class='blockTwoColor'>$post[title]</h2></a>
            <div>$post[summary]</div>
        </div>
        ";
    }
    closeBlock();
    footer();
    ?>

    <!-- //loop through the sections and echo the block for each section, from here loop through -->
<!-- 

            <div class='".$block."'>
                <a class='".$linking."' href='$href'><h2 class='".$color."'>$sectionOne</h2></a>
                <p class='".$textTag."'> $textOne </p>

            </div>
            <div class='".$block."'>
                <a class='".$linking."' href='$href'><h2 class='".$color."'>$sectionTwo</h2></a>
                <p class='".$textTag."'> $textTwo </p>
            
            </div>
            <div class='".$block."'>
                <a class='".$linking."' href='$href'><h2 class='".$color."'>$sectionThree</h2></a>
                <p class='".$textTag."'>$textThree</p>
            </div>

            // <div class = 'recentPost'>
        //     <a href='displayPosts.php?postID=$postID'>$post[title]</a>
        //     <div>$post[summary]</div> -->