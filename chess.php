<html>
    <head>
        <link rel="stylesheet" href="chess.css">
    </head>

</html>

<?php
//  $counter=0;

// echo "<div class= 'black'> Hello </div>";
// echo "<div class= 'white' style= 'background-color: grey; height: 100px; width: 100px;'> Hello </div>";
echo "<div class='grid-container'>";
// echo"<div class='grid-item-white'></div>";
// echo"<div class='grid-item-black'></div>";
for ($x=0; $x<64; $x++){
    if ($x < 8){
        if (($x % 2) == 0){
            echo"<div class='grid-item-black'></div>";
        }
        else {
            echo"<div class='grid-item-white'></div>";
        }
    }
    else if ( $x >= 8 && $x < 16){
        if (($x % 2) == 0){
            echo"<div class='grid-item-white'></div>";
        }
        else {
            echo"<div class='grid-item-black'></div>";
        }
    }
    else if ( $x >= 16 && $x < 24){
        if (($x % 2) == 0){
            echo"<div class='grid-item-black'></div>";
        }
        else {
            echo"<div class='grid-item-white'></div>";
        }
    }
    else if ( $x >= 24 && $x < 32){
        if (($x % 2) == 0){
            echo"<div class='grid-item-white'></div>";
        }
        else {
            echo"<div class='grid-item-black'></div>";
        }
    }
    else if ( $x >= 32 && $x < 40){
        if (($x % 2) == 0){
            echo"<div class='grid-item-black'></div>";
        }
        else {
            echo"<div class='grid-item-white'></div>";
        }
    }
    else if ( $x >= 40 && $x < 48){
        if (($x % 2) == 0){
            echo"<div class='grid-item-white'></div>";
        }
        else {
            echo"<div class='grid-item-black'></div>";
        }
    }
    else if ( $x >= 48 && $x < 56){
        if (($x % 2) == 0){
            echo"<div class='grid-item-black'></div>";
        }
        else {
            echo"<div class='grid-item-white'></div>";
        }
    }
    else if ( $x >= 56 && $x < 68){
        if (($x % 2) == 0){
            echo"<div class='grid-item-white'></div>";
        }
        else {
            echo"<div class='grid-item-black'></div>";
        }
    }
    
}
echo "</div>";