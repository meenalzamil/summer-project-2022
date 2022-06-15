<?php
    include_once('include/initialize.php');
    $allTrips = getAllTrips();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            How to get the coordinates of a mouse click on a canvas element?
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
                var ctx = canvas.getContext("2d");
                allTrips.forEach(function (Trip){
                    ctx.beginPath();
                    ctx.arc(Trip['xCoordinate'], Trip['yCoordinate'], 3, 0, 2 * Math.PI);
                    ctx.stroke();
                });
                console.log(allTrips);
            }
        </script>
    </body>
  
</html>