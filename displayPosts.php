<?php
include_once('include/initialize.php');
$postId = $_REQUEST['postId'];
$post = getIndividualPost($_REQUEST['postId']);

echo "
    <p><a href='displayTrips.php?tripId=$post[tripId]'>&lt; Return to the trip page</a></p>
    <h1>$post[location]</h1>
    $post[content]
    <br/>
    <br/>
    <h3>Comments</h3>
";
foreach(getComments($postId) as $commentIndex => $comment){
 
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
<br/>
<h3>Leave a comment on this post!<h3>
<form action='handleComments.php?postId=$postId' method='post'>
    Comment: <textarea rows='10' cols='30' name='comment'></textarea><br>
    Name: <input type='text' name = 'name'><br>
    <input type='submit' name='submitButton'>
</form>
";