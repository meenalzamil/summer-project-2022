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

        $blockNumber = 'blockTwo', 
        $backgroundImage = 'backgroundTwo', 
        $row = 'row', 
        $block = 'space', 
        $linking='linking', 
        $href='displayPosts.php', 
        $textTag='aboutMe', 
        $color='blockTwoColor', 
        $sectionOne = 'Classes', 
        $sectionTwo = 'Who Am I', 
        $sectionThree = 'Work Experience', 
        $textOne = 'There are so many amazing classes I have taken since starting college, both related and unrelated to my major program. Here are some of my favorite or most influntial classes and why they left such an impact. ', 
        $textTwo = 'There are so many experiences and people that introduced me to the things I love to do. Here is a little section on the moments that I think are important when discussing who I am. ', 
        $textThree = 'Here is a look into my work experience and the tasks I was repsonsible for.');
    breaks