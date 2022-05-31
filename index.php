<?php
    include_once ('include/initialize.php');
    echoHeader();
    firstBlock();
    breaks();
    blocks(
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
    breaks();
    blocks(
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

    // foreach(useArray() as $postID => $post){

    // }
    ?>

