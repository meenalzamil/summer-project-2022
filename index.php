<?php

include_once ('include/initialize.php');
echoHeader();
foreach(getAllTrips() as $tripID => $trip){
 
        echo"
        <div >
            <a style='color: #27676D' href='displayPosts.php?postID=$tripID'>$trip[location]</a>
            <div class='greenSection'>$trip[blurb]</div>
        </div>
        ";
     
}
footer();
?>

