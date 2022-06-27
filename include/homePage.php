<?php
include_once('initialize.php');

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
</br>
</br>
</br>
</br>
</br>
</br>
";
}

function homePageMap(){
    echo"
    <div id='mapConatiner'>
        <div id='mapText'>
            <p>Explore the World</p>
        </div>
    </div>
    <div id='mapContainer'>
        <div id='homePageMap'></div>
    </div>
    ";
}