<?php

include_once ('include/initialize.php');
echoHeader();
foreach(getAllTrips() as $index => $trip){
 
        echo"
        <div style= 'font-size: 20px; text-align: center;'>
            <a style='color: #27676D' href='displayTrips.php?tripID=$trip[tripID]'>$trip[location]</a>
            <div class='greenSection'>$trip[blurb]</div>
            <p style = 'font-size: 15px'>$trip[startDate] to $trip[endDate]</p>
        </div>
        <br/>
        ";

        // var_dump($trip);
}
echo"
<h3 style = 'text-align:center' >Add a new trip!<h3>
";
echo"
<form action='handleNewTrip.php' method='post' style = 'text-align: center'>
    Location: <input type='text' name = 'location'><br>
    <textarea rows='10' cols='30' name='blurb'></textarea><br>
    Start Date: <input type='date' name= 'startDate'><br>
    End Date: <input type='date' name= 'endDate'><br>
    <input type='submit' name='submitButton'>
</form>
";
footer();
?>

