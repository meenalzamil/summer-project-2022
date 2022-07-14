<?php
include_once('include/initialize.php');
$location = $_POST["location"];
$startDate = $_POST["startDate"]; 
$endDate = $_POST["endDate"]; 
$xCoordinate = $_POST["xCord"];
$yCoordinate = $_POST["yCord"];
$totalXLength = $_POST["xLength"];
$totalYLength = $_POST["yLength"];
// $filePath=$_POST["image_upload"];
// echo $filePath;
var_dump(isset($_FILES['img_submit']));
if(isset($_FILES['img_upload'])){
    echo $_FILES['img_upload']['tmp_name'];
}
// if (isset($_POST['img_submit'])){
//     $img_name=$_FILES['img_upload']['name'];
//     $tmp_img_name=$_FILES['img_upload']['tmp_name'];
//     move_uploaded_file($tmp_img_name, "photos/".$img_name);
// }

$success = createNewTrip($location, $startDate, $endDate, $xCoordinate, $yCoordinate, $totalXLength, $totalYLength, $filePath);
if ($success){
    echo $filePath;
    echo "You successfully created a trip!";
    echo "<a href='index.php'>Go back to home page to view</a>";
}
else{
    echo $filePath;
    echo "Creation of trip failed.";
    echo "<a href='index.php'>Go back to home page to try again</a>";

}