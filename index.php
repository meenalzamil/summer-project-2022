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
    breaks();
    blocks();
    image($backgroundImage = 'backgroundOne');
    echo"
            <div class='spaceThree'>
                <a style='color: #27676D' href='comments.php'><h2 class='blockThreeColor'>Give the Comment!</h2></a>
                <div class='greenSection'>Leave us some comments to look at!</div>
            </div>
            ";
    echo"
            <div class='spaceThree'>
                <a style='color: #27676D' href='displayComments.php'><h2 class='blockThreeColor'>Read the Comments!</h2></a>
                <div class='greenSection'>Read some of the comments left by others!</div>
            </div>
            ";
    closeBlock();
    footer();
    ?>
