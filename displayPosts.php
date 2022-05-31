<?php
include_once('include/initialize.php');
$post = getPost($_REQUEST['postID']);

echo "
    <p><a href='index.php'>&lt; Return to the home page</a></p>
    <h1>$post[title]</h1>
    $post[content]
";