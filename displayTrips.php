<?php
include_once('include/initialize.php');
echoHeader();

$ID = $_REQUEST['tripID'];
// echo $ID;
// $posts = getPosts(0);
echo "
    <p style='font-size: 10px; text-align: center;'><a href='index.php'> Return to the home page</a></p>
";

foreach(getPosts($ID) as $postIndex => $post){
 
    echo"
    <div style='text-align: center'>
        <a style='color: #27676D' href='displayPosts.php?postID=$post[postID]'>$post[location]</a>
    </div>
    ";
 
}
echo "<br/>";
echo "<br/>";

echo"
<h3 style='text-align: center'>Add a new location to your trip!<h3>
";
echo"
<form style='text-align: center' action='handleNewPost.php?tripID=$ID' method='post'>
    Location: <input type='text' name = 'location'><br>   
    <textarea rows='10' cols='30' name='content'></textarea><br>
    Date Traveled: <input type='date' name= 'dateOfTravel'><br>
    <input type='submit' name='submitButton'>
</form>
";
footer();