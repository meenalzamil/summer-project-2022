<?php

include_once ('include/initialize.php');
echoHeader();
foreach(getAllTrips() as $index => $trip){
 
        echo"
        <div >
            <a style='color: #27676D' href='displayTrips.php?tripId=$trip[tripId]'>$trip[location]</a>
        </div>
        <br/>
        ";
}
echo"
<h3>Add a new trip!<h3>
<form action='handleNewTrip.php' method='post'>
    Location: <input type='text' name = 'location'><br>
    Start Date: <input type='date' name= 'startDate'><br>
    End Date: <input type='date' name= 'endDate'><br>
    <input type='submit' name='submitButton'>
</form>
";
footer();


