<?php
function getAllTrips(){
    $allPosts = dbQuery("
    SELECT * 
    FROM `trip` 
    ORDER BY startDate

    ")->fetchAll();
    return ($allPosts);
}

function tripHeader($tripHeaderImage, $tripLocation){
    echo"
    <div id='tripHeader'>
        <div id='tripImage' style='background-image: photos/$tripHeaderImage'>
            <div id='tripText'>
                <p id='tripLocation'>$tripLocation</p>
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

//onmouseenter, onmouseleave