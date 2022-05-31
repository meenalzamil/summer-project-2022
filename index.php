<?php
    include_once ('include/initialize.php');
    // echo "
    // <html>

    // <head>
    // <title>This is our title!</title>
    // <link rel='stylesheet' href='styles.css'>
    // <link rel='preconnect' href='https://fonts.googleapis.com'>
    // <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    // <link href='https://fonts.googleapis.com/css2?family=Koulen&family=Roboto+Mono:wght@400;500&display=swap' rel='stylesheet'>
 
    // <body>
    // ";
    echoHeader();
    firstBlock();
    breaks();
    blocks($blockNumber = 'blockTwo', $backgroundImage = 'backgroundTwo', $row = 'row', $block = 'space', $linking='linking', $href='displayPosts.php', $textTag='aboutMe', $color='blockTwoColor', $sectionOne = 'Classes', $sectionTwo = 'Who Am I', $sectionThree = 'Work Experience');
    breaks();
    blocks($blockNumber = 'blockThree', $backgroundImage = 'backgroundThree', $row = 'row', $block = 'spaceThree', $linking='linkingAgain', $href='displayPosts.php', $textTag='greenSection', $color='blockThreeColor', $sectionOne = 'Hobbies', $sectionTwo = 'Creations', $sectionThree = 'Favorites');
    footer();
    ?>
