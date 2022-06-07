<?php
include_once('include/initialize.php');
$post = getPosts($_REQUEST['postID']);
echoHeader();
echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";

foreach(getPosts($post) as $postID => $location){
    echo"
    <div >
        <a href='displayPosts.php?postID=$postID'>$location[location]</a>
    </div>
    ";
 
}
footer();