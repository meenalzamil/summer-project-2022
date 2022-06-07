<?php
include_once('include/initialize.php');
//$post = getPosts($_REQUEST['postID']);
echoHeader();
echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";
// getPosts('1');

// foreach(getPosts($tripID) as $postID => $location){
//     echo"
//     <div >
//         <a href='displayPosts.php?postID=$postID'>$location[location]</a>
//     </div>
//     ";
 
// }
foreach(getAllPosts() as $postID => $post){
 
    echo"
    <div >
        <a style='color: #27676D' href='displayPosts.php?tripID=$postID'>$post[location]</a>
    </div>
    ";
 
}
footer();