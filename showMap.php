<?php
    include_once('include/initialize.php');    
    echoHeader();
    // navBar();

    $allTrips = getAllTrips();
    echo"
        <div id='showMap'>
        </div>
  
    ";
    echo"
        <script src='map.js' type='text/javascript'>
        </script>
        <script>
          
            var map = document.querySelector('#showMap');
            renderTrips(".json_encode($allTrips).", map);

            
        </script>
    ";

    footer(); 
?>

<!-- event listener for resize and call renderTrips -->
