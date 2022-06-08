<?php
include_once('include/initialize.php');
$ID = $_REQUEST['postID'];
$post = getIndividualPost($_REQUEST['postID']);

echo "
    <p><a href='displayTrips.php?tripID=$post[tripID]'>&lt; Return to the trip page</a></p>
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

//comments
echo"
<h3>Leave a comment on this post!<h3>
";
echo"
<form action='handleComments.php?postID=$ID' method='post'>
    Comment: <textarea rows='10' cols='30' name='comment'></textarea><br>
    Name: <input type='text' name = 'name'><br>
    <input type='submit' name='submitButton'>
</form>
";