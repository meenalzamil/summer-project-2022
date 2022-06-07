<?php

// $name = $_POST["name"];
// $comment = $_POST["comment"]; 

function insertData($postID){
    $name = $_POST["name"];
    $comment = $_POST["comment"]; 
    dbQuery("
        INSERT INTO comments (comment, name)
        VALUES ('$comment', '$name', '$postID')
    ");
}





insertData();

echo "<h1>Success!</h1>
<p><a href='index.php'>&lt; Return to the home page</a></p>

";