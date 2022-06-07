<?php
include_once('include/initialize.php');
$ID = $_REQUEST['tripID'];
echo $ID;
// $posts = getPosts(0);
echoHeader();
echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";

foreach(getPosts($ID) as $postIndex => $post){
 
    echo"
    <div >
        <a style='color: #27676D' href='displayPosts.php?postID=$post[postID]'>$post[location]</a>
    </div>
    ";
 
}
footer();