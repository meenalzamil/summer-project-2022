<?php
function getAllTrips(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `trip` 
    ORDER BY startDate

    ")->fetchAll();
    return ($allPosts);
}

function tripHeader(){
    echo"
    <div id='tripHeader'>
        <div id='tripImage'>
            <div id='tripText'>
                <p id='tripLocation'>SPAIN</p>
                <a id='newPost' href='#'>NEW POST</a>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>
    </br>  
    </br>
    </br> 
    </br>  
    </br>
    </br> 
    ";
}

function postSectionOfTrip(){
    echo"
        <div id='postsOfTripContainer'>
            <div class='individualPost'>
            </div>
            <div class='individualPost'>
            </div>     
            <div class='individualPost'>
            </div>
            <div class='individualPost'>
            </div>
            <div class='individualPost'>
            </div>
        </div>
    ";
}