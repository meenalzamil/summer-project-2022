console.log("This file is a thing");

function renderTrips(allTrips, map){
    let rect = map.getBoundingClientRect();
    var parent = document.getElementById("showMap");
    console.log(rect);
    parent.innerHTML="";
    allTrips.forEach(function (trip){
        var img = document.createElement("img");

        var scaledXCoordinate = (trip['xCoordinate']/trip['totalXLength']); 
        var scaledYCoordinate = (trip['yCoordinate']/trip['totalYLength']); 

        // console.log("ScaleX" + scaledXCoordinate);
        // console.log("ScaleY" + scaledYCoordinate);

        var finalXCoordinate=(scaledXCoordinate  * rect.width);
        var finalYCoordinate=(scaledYCoordinate  * rect.height);

        console.log(rect.width + ", " + rect.height);
        console.log("Parent ", {parent});
        // console.log(finalXCoordinate + ", " + finalYCoordinate);

        img.src = "airballoon-20x18.png";
        img.id=trip['location'];
        img.style.position="absolute";
        img.style.left=finalXCoordinate;
        img.style.top=finalYCoordinate;
        parent.appendChild(img);
    });
}

function getMousePosition(home, event) {
    console.log("HOME" + home);
    // console.log({event});
    let rect = home.getBoundingClientRect();
    console.log(rect.right);
    console.log(rect.bottom);
    // console.log(event.clientX)
    const x = (event.clientX - rect.left);
    const y = (event.clientY - rect.top);
    document.getElementById('xCord').value = x;
    document.getElementById('yCord').value = y;
    document.getElementById('xLength').value = rect.right;
    document.getElementById('yLength').value = rect.bottom;
}
