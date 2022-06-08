<?php
include_once('include/initialize.php');
echoHeader();

$ID = $_REQUEST['postID'];
$post = getIndividualPost($_REQUEST['postID']);

echo "
    <p style='font-size: 10px; text-align: center;'><a href='displayTrips.php?tripID=$post[tripID]'>&lt; Return to the trip page</a></p>
    <h1 style='text-align: center'>$post[location]</h1>
    <p style='text-align: center;>$post[content]<p>
";
echo "
<br/>
";
echo "
<br/>
";
echo "
    <h3 style='text-align: center'>Comments</h3>
";
foreach(getComments($ID) as $commentIndex => $comment){
 
    echo"
    <div style='text-align: center' >
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
<h3 style='text-align: center'>Leave a comment on this post!<h3>
";
echo"
<form style='text-align: center' action='handleComments.php?postID=$ID' method='post'>
    Comment: <textarea rows='10' cols='30' name='comment'></textarea><br>
    Name: <input type='text' name = 'name'><br>
    <input type='submit' name='submitButton'>
</form>
";

footer();