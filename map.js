console.log("This file is a thing");

function renderTrips(allTrips, map){
    let rect = map.getBoundingClientRect();
    var parent = document.getElementById("showMap");
    // console.log("rectangle dim", {rect});
    parent.innerHTML="";

    allTrips.forEach(function (trip){
        console.log(allTrips['location']);
        var img = document.createElement("img");
        var airballoonContainer = document.createElement("div");
        var tripName = document.createElement("div");


        var scaledXCoordinate = (trip['xCoordinate']/trip['totalXLength']); 
        var scaledYCoordinate = (trip['yCoordinate']/trip['totalYLength']); 

        console.log("ScaleX" + scaledXCoordinate);
        console.log("ScaleY" + scaledYCoordinate);

        var finalXCoordinate=(scaledXCoordinate  * rect.width) + rect.left;
        var finalYCoordinate=(scaledYCoordinate  * rect.height) + rect.top;

        console.log(rect.width + ", " + rect.height);
        console.log("Parent ", {parent});
        // console.log(finalXCoordinate + ", " + finalYCoordinate);

        img.src = "airballoon-20x18.png";
        img.id=trip['tripId'];
        img.class=trip['location'];
        img.style.position="absolute";
        img.style.left=finalXCoordinate -9;
        img.style.top=finalYCoordinate-15;

        img.addEventListener("mouseenter", () => hoverOverBalloon(trip['tripId']));
        img.addEventListener("mouseleave", () => leavingBalloon(trip['tripId']));
        img.addEventListener("click", () => redirectToTrip(trip['tripId']));


        tripName.className='airballoon';
        tripName.id=trip['location'];
        tripName.value=trip['location'];
        tripName.style.display="none";
        tripName.innerHTML=trip['location'];
        img.appendChild(tripName);
        parent.appendChild(img);
    });
}
function hoverOverBalloon($tripId){
  // figure out where on page it is and then create some html, maybe pass x and y coordinates too
  //when I add text to page, give it a specific id that I can take away using leavingBalloon
}
function redirectToTrip($tripId){
  //change url javascript
}

function getMousePosition(home, event) {
    console.log("HOME", {home});
    // console.log({event});
    let rect = home.getBoundingClientRect();
    console.log("height " + rect.height);
    console.log("width " + rect.width);
    console.log("right " + rect.right);
    console.log("bottom " + rect.bottom);
    // console.log(event.clientX)
    const x = (event.clientX - rect.left);
    const y = (event.clientY - rect.top);
    document.getElementById('xCord').value = x;
    document.getElementById('yCord').value = y;
    document.getElementById('xLength').value = rect.width;
    document.getElementById('yLength').value = rect.height;
}
