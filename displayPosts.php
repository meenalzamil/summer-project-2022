<?php
include_once('include/initialize.php');
$ID = $_REQUEST['postID'];
echo $ID;
echoHeader();
echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";

foreach(getIndividualPost($ID) as $postIndex => $post){
 
    echo"
    <div >
        <a style='color: #27676D' href='displayPosts.php?postID=$post[postID]'>$post[location]</a>
    </div>
    ";
 
}
footer();
// include_once('include/initialize.php');
// $ID = $_REQUEST['postID'];
// echo $ID;
// // $posts = getPosts(0);
// echoHeader();
// echo "
//     <p><a href='index.php'>&lt; Return to the home page</a></p>
// ";

// foreach(getIndividualPost($ID) as $postID => $post){
 
//     echo"
//     <div>
//         <h2 style = 'text-align: center'>$post[location]</h2>
//         <div> $post[content] </div>
//         <div> $post[datePosted] </div>
//     </div>
//     ";
 
// }
// footer();