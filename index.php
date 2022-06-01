<?php
    include_once ('include/initialize.php');
    echoHeader();
    firstBlock();
    breaks();
    blocks();
    image($backgroundImage='backgroundTwo');
    foreach(getAllPosts() as $postID => $post){
        if ($postID == 3){
            break;
        }
        echo"
        <div class='space'>
            <a style='color: #B082A0' href='displayPosts.php?postID=$postID'><h2 class='blockTwoColor'>$post[title]</h2></a>
            <div class='aboutMe'>$post[summary]</div>
        </div>
        ";
    }
    closeBlock();
    breaks();
    blocks();
    image($backgroundImage='backgroundThree');
    foreach(getAllPosts() as $postID => $post){
        if($postID >= 3){
            echo"
            <div class='spaceThree'>
                <a style='color: #27676D' href='displayPosts.php?postID=$postID'><h2 class='blockThreeColor'>$post[title]</h2></a>
                <div class='greenSection'>$post[summary]</div>
            </div>
            ";
         }
    }
    closeBlock();
    footer();
    ?>

    <!-- //loop through the sections and echo the block for each section, from here loop through -->
<!-- 

        $blockNumber = 'blockThree', 
        $backgroundImage = 'backgroundThree', 
        $row = 'row', 
        $block = 'spaceThree', 
        $linking='linkingAgain', 
        $href='displayPosts.php', 
        $textTag='greenSection', 
        $color='blockThreeColor', 
        $sectionOne = 'Favorites', 
        $sectionTwo = 'Hobbies', 
        $sectionThree = 'Creations', 
        $textOne ='When I was younger and journaled more frequently, every once and a while I would document my "favorites" in that moment as a way to store my personality in a few lines. Linked is my current list of favorites. ', 
        $textTwo='I love being busy, so I try to find hobbies that keep my mind occupied but that also satisfy my creative mind. Here are a few of my hobbies and what role they play in my life.', 
        $textThree='During quarantine, I had so much time on my hands, and I spent that exploring the artistic side of myself. Here, I have short stories, poems, and art that I want to share.');
    footer();
    function blocks($blockNumber, $backgroundImage, $row, $block, $linking, $href, $textTag, $color, $sectionOne, $sectionTwo, $sectionThree, $textOne, $textTwo, $textThree){
    echo "<div id='".$blockNumber."'>
    <div id='".$backgroundImage."'>
    </div>
        <div  class='".$row."'>
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
        </div>
</div>