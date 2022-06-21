<?php
    include_once('include/initialize.php');
    $allTrips = getAllTrips();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            See all trips on the map!
        </title>
    </head>
    
    <body>
        <div style='text-align: center; margin-top: 100px; position: relative;'>
            <canvas id = 'myCanvas' width="800" height="600"
                style="background-color: orange">
            </canvas>
        </div>
       
        <script>
            renderTrips(<?php echo json_encode($allTrips); ?>);

            function renderTrips(allTrips){
                var canvas = document.getElementById("myCanvas");
                var drawingContext = canvas.getContext("2d");
                allTrips.forEach(function (trip){
                    drawingContext.beginPath();
                    drawingContext.arc(trip['xCoordinate'], trip['yCoordinate'], 3, 0, 2 * Math.PI);
                    drawingContext.stroke();
                });
            }
        </script>
    </body>
  
</html>