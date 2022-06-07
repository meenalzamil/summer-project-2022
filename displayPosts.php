<?php
// include_once('include/initialize.php');
// $ID = $_REQUEST['postID'];
// echo $ID;
// echoHeader();
// echo "
//     <p><a href='index.php'>&lt; Return to the home page</a></p>
// ";

// foreach(getIndividualPost($ID) as $postIndex => $post){
 
//     echo"
//     <div >
//         <a style='color: #27676D' href='displayPosts.php?postID=$post[postID]'>$post[location]</a>
//     </div>
//     ";
 
// }
// footer();

include_once('include/initialize.php');
$ID = $_REQUEST['postID'];
$post = getIndividualPost($_REQUEST['postID']);

echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
    <h1>$post[location]</h1>
    $post[content]
";
echo "
<br/>
";
echo "
<br/>
";
echo "
    <h3>Comments</h3>
";
foreach(getComments($ID) as $commentIndex => $comment){
 
    echo"
    <div >
        <div><strong>$comment[name]</strong></div>
        <div>$comment[comment]</div>
        <div>$comment[datePosted]</div>
    </div>
    ";
 
}
echo "
<br/>
";
echo "
<br/>
";
echo"
<h3>Leave a comment on this post!<h3>
";
echo"
<form action='handleComments.php' method='post'>
    Comment: <textarea rows='10' cols='30' name='comment'></textarea><br>
    Name: <input type='text' name = 'name'><br>
    <input type='submit' name='submitButton'>
</form>
";