<?php
include_once('include/initialize.php');
$ID = $_REQUEST['tripID'];
// echo $ID;
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
echo "<br/>";
echo "<br/>";

echo"
<h3>Add a new location to your trip!<h3>
";
echo"
<form action='handleNewPost.php?tripID=$ID' method='post'>
    Content: <textarea rows='10' cols='30' name='content'></textarea><br>
    Location: <input type='text' name = 'location'><br>
    Date Traveled: <input type='date' name= 'dateOfTravel'><br>
    <input type='submit' name='submitButton'>
</form>
";
footer();