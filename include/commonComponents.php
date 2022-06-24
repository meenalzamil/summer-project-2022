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