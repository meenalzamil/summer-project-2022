<?php
include_once('initialize.php');

function echoHeader() {
    echo "
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Koulen&family=Roboto+Slab:wght@200&family=Tangerine&display=swap' rel='stylesheet'>
        <link href='styles.css' rel='stylesheet' type='text/css'>
        <title>Nav Bar</title>
    </head>
    <body>
    ";
}

function footer(){
    echo "
    </body>
    </html>
    ";
}

function navBar(){
    echo"
    <header>
        <div class='navbar'>
            <ul class='nav-list'>
                <li class='nav-item'><a href='#'>Home</a></li>
                <li class='nav-item'><a href='#'>All Trips</a></li>
                <img src='logo.png' alt='logo' class='logo' height='125' width='175'>
                <li class='nav-item'><a href='#'>New Trip</a></li>
                <li class='nav-item'><a href='#'>Bucket List</a></li>
            </ul>
        </div>
    </header>
    ";
}

function firstPageIntro(){
    echo"
    <div class='boxes'>
    <div class='row'>
        <div id='greenHomePageBox'>
            <img id='frameOne' src='Frame 1.png' alt='firstPageDesign'>
        </div>
        <div id='blueHomePageBox'>
                <h3 class='firstPage' style='margin-top: 60px; font-size: 15px; text-align: center;'>WELCOME TO MY VIRTUAL PASSPORT
                    <hr size='2' width='10%' color='#FBFDFD'>  
                </h3>
                <h1 style='font-size: 30px; text-align: center; margin-top: -10px;' class='firstPage'>Loren ipsum dolor sit amet, consectetur adispiscing elit sed do.</h1>
                <p style='font-size: 10x; text-align: center;  margin-top: -10px;' class='firstPage'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>
<div id='firstPageImage'></div>
";
}
