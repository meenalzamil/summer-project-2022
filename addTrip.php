<?php
include_once('include/initialize.php');
echoHeader('New Trip');
navBar();

echo"
    <script type='text/javascript' src='map.js'>
    </script>
    <div id='postcardNewTrip'>
        <div id='postcardMapContainer'>
            <div id='postcardMap'></div>
        </div>
        <div id='vlContainer'>
            <div id='vl'></div>
        </div>
        <div id='postcardInputContainer'>
            <div id='rightSidePostcardSpacing'>
                <div id='postStamp'></div>
                <div id='postcardInputFields'>
                <h2 id='postcardLabel'>Mail in your newest trip destination</h2>

                <form action='handleNewTrip.php' method='post'></br></br>
                    <input type='text' id='location' name='location' placeholder='Location'></br></br>
                    <input type='date' id='startDate' name='startDate' placeholder='Date Started'></br></br>
                    <input type='date' id='endDate' name='endDate' placeholder='Date Ended'></br></br>
                    
                    <input type='hidden' step='0.01' name='xCord' id='xCord'>
                    <input type='hidden' step='0.01' name='yCord' id='yCord'>
                    <input type='hidden' step='0.01' name='xLength' id='xLength'>
                    <input type='hidden' step='0.01' name='yLength' id='yLength'>
                    
                    <input type='submit' id='submitTrip' value='Submit'>
                </form>

                </div>
            </div>
        </div>
    </div>
     <script>
        var thepostcardMap = document.querySelector('#postcardMap');
        thepostcardMap.addEventListener('click', function(e){
        getMousePosition(thepostcardMap, e);
        });
     </script>
";

footer();



//  <div id='postcardMap'>
//  </div>

//  <script type='javascript/text' src='map.js'>
//  </script>
//  <script>
//  var thepostcardMap = document.querySelector('#postcardMap');
//  thepostcardMap.addEventListener('click', function(e){
//  getMousePosition(thepostcardMap, e);
//  });
//  </script>
//  ";