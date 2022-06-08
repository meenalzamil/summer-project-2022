<?php
include_once('include/initialize.php');
function createNewTrip(){
    $location = $_POST["location"];
    $blurb = $_POST["blurb"]; 
    $startDate = $_POST["startDate"]; 
    $endDate = $_POST["endDate"]; 
    $result = false;
    if(!empty($location) && !empty($blurb) && !empty($startDate) && !empty($endDate)){
        // if($location != " " && $blurb != " " && $startDate != " " && $endDate != " "){
            $result = dbQuery("
            INSERT INTO trip (location, blurb, startDate, endDate)
            VALUES ('$location', '$blurb', '$startDate', '$endDate')
        ");
        // }
    }
    if ($result){
        return "success";
    }
    else{
        return "error";
    }
}

$success = createNewTrip();
if ($success == "success"){
    // echo $success;
    echo "You successfully created a trip!";
    echo "<a href=index.php>Go back to home page to view</a>";
}
else{
    // echo $success;
    echo "Creation of trip failed.";
    echo "<a href=index.php>Go back to home page to try again</a>";

}