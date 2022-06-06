<?php
include_once('include/initialize.php');
function echoHeader() {
    echo "
    <html>

    <head>
    <title>This is our title!</title>
    <link rel='stylesheet' href='styles.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Koulen&family=Roboto+Mono:wght@400;500&display=swap' rel='stylesheet'>
    </head>
    <body>
    <div id='beginning'>
    <p id='header'>M e e n a  &nbsp; Z a m i l</p>
   </div>
    ";
}
function firstBlock (){
    echo "
    <div id='blockOne'>
        <div id='backgroundOne'>
        </div>
        <div class='row'>
            <div class='left'>
                <img id='profileImage' src='profile.jpeg' alt='Meena's Picture'/>
            </div>
            <div id='blockOneText' class='right'>
                <br/>
                <p>Welcome to my page! I am so excited to finally have a site to highlight the different sides of myself, which can range from academics and work to creative endeavors and my current obsessions. When I began this process, I viewed this as a short-term project with no design or layout in mind. As I have progressed, I have found a new love of digitally creating visuals using color pallets and images. I now plan to continue editing and re-designing this page, almost as to fit my changing identity as I grow. You will find that many of the posts are in the form of a letter. I have always loved writing and receiving letters, so it only feels right to add that love into this site. Thank you for being here as I discover more about myself!
                </p>
            </div>
        </div>
    </div>
    ";
}
function blocks($blockNumber){
    echo "
    <div id='$blockNumber'>
        <div  class='row'>
    ";
}
function closeBlock(){
    echo"
    </div>
    </div>
";
}
function image($backgroundImage){
    echo "<div id=$backgroundImage></div>";
}
function breaks(){
    echo " 
    <br />
    <br />
    <br />
    ";
}

function footer(){
    echo "
    </body>
    </html>
    ";
}