<?php
include_once('include/initialize.php');


echo"
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";
echo"
<h1> HERE ARE ALL COMMENTS </h1>
";
foreach(getAllComments() as $commentID => $comment){
    echo"
    <h2>$comment[name]: </h2>
    <div>$comment[comment]</div>
    <div>$comment[datePosted]</div>

    ";
}