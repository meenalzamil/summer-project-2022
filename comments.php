<?php
include_once ('include/initialize.php');

echo"
<h1>Leave us a comment! Give your thoughts!<h1>
";
echo"
<form action='handleComments.php' method='post'>
    Comment: <textarea rows='10' cols='30' name='comment'></textarea><br>
    Name: <input type='text' name = 'name'><br>
    <input type='submit' name='submitButton'>
</form>
";

