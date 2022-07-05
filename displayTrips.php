<?php
include_once('include/initialize.php');
$tripId = $_REQUEST['tripId'];
echoHeader('All Trips');
echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
";

foreach(getPosts($tripId) as $postIndex => $post){
 
    echo"
    <div >
        <a style='color: #27676D' href='displayPosts.php?postId=$post[postId]'>$post[location]</a>
    </div>
    ";
 
}
echo "<br/>
<br/>
<h3>Add a new location to your trip!<h3>
<form action='handleNewPost.php?tripId=$tripId' method='post'>
    Content: <textarea rows='10' cols='30' name='content'></textarea><br>
    Location: <input type='text' name = 'location'><br>
    Date Traveled: <input type='date' name= 'dateOfTravel'><br>
    <input type='submit' name='submitButton'>
</form>
";
footer();