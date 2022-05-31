<?php
    include_once ('include/initialize.php');
    echoHeader();
    firstBlock();
    breaks();
    blocks($blockNumber = 'blockTwo', $backgroundImage = 'backgroundTwo', $row = 'row', $block = 'space', $linking='linking', $href='displayPosts.php', $textTag='aboutMe', $color='blockTwoColor', $sectionOne = 'Classes', $sectionTwo = 'Who Am I', $sectionThree = 'Work Experience', $textOne = 'There are so many amazing classes I have taken since starting college, both related and unrelated to my major program. Here are some of my favorite or most influntial classes and why they left such an impact. ', $textTwo = 'There are so many experiences and people that introduced me to the things I love to do. Here is a little section on the moments that I think are important when discussing who I am. ', $textThree = 'Here is a look into my work experience and the tasks I was repsonsible for.');
    breaks();
    blocks($blockNumber = 'blockThree', $backgroundImage = 'backgroundThree', $row = 'row', $block = 'spaceThree', $linking='linkingAgain', $href='displayPosts.php', $textTag='greenSection', $color='blockThreeColor', $sectionOne = 'Favorites', $sectionTwo = 'Hobbies', $sectionThree = 'Creations', $textOne ='When I was younger and journaled more frequently, every once and a while I would document my "favorites" in that moment as a way to store my personality in a few lines. Linked is my current list of favorites. ', $textTwo='I love being busy, so I try to find hobbies that keep my mind occupied but that also satisfy my creative mind. Here are a few of my hobbies and what role they play in my life.', $textThree='During quarantine, I had so much time on my hands, and I spent that exploring the artistic side of myself. Here, I have short stories, poems, and art that I want to share.');
    footer();
    ?>

<!-- <div id="blockTwo">
        <div id="backgroundTwo">
        </div>
            <div  class="row">
            <div class="space">
                <a class="linking" href="classes.html"><h2 class="blockTwoColor">Classes</h2></a>
                <p class="aboutMe">There are so many amazing classes I have taken since starting college, both related and unrelated to my major program. Here are some of my favorite or most influntial classes and why they left such an impact. </p>

            </div>
            <div class="space">
                <a class="linking" href="whoAmI.html"><h2 class="blockTwoColor">Who Am I?</h2></a>
                <p class="aboutMe"> There are so many experiences and people that introduced me to the things I love to do. Here is a little section on the moments that I think are important when discussing who I am. </p>
                
            </div>
            <div class="space">
                <a class="linking" href="work.html"><h2 class="blockTwoColor">Work</h2></a>
                <p class="aboutMe">Here is a look into my work experience and the tasks I was repsonsible for.</p>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />



    <div id="blockThree">
        <div id="backgroundThree">
        </div>
        <div class="row">
            <div class="spaceThree">
                <a class="linkingAgain" href="favorites.html"><h2 class="blockThreeColor">Favorites</h2></a>
                <p class="greenSection">When I was younger and journaled more frequently, every once and a while I would document my "favorites" in that moment as a way to store my personality in a few lines. Linked is my current list of favorites. </p>
            </div>
            <div class="spaceThree">
                <a class="linkingAgain" href="hobbies.html"><h2 class="blockThreeColor">Hobbies</h2></a>
                <p class="greenSection">I love being busy, so I try to find hobbies that keep my mind occupied but that also satisfy my creative mind. Here are a few of my hobbies and what role they play in my life. </p>

            </div>
            <div class="spaceThree">
                <a class="linkingAgain" href="creations.html"><h2 class="blockThreeColor">Creations</h2></a>
                <p class="greenSection">During quarantine, I had so much time on my hands, and I spent that exploring the artistic side of myself. Here, I have short stories, poems, and art that I want to share.</p>

            </div>
        </div>
    </div>
</body>

</html> -->