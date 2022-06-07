<?php

include_once ('include/initialize.php');
echoHeader();
foreach(getAllTrips() as $index => $trip){
 
        echo"
        <div >
            <a style='color: #27676D' href='displayTrips.php?tripID=$trip[tripID]'>$trip[location]</a>
            <div class='greenSection'>$trip[blurb]</div>
        </div>
        <br/>
        ";

        // var_dump($trip);
}
footer();
?>

