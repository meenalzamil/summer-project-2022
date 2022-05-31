<?php
function useArray(){
    $postArray = array();
    $postArray['#1'] = array(
        "sectionName" => "Classes"
        
    );
    $postArray['#2'] = array(
        "sectionName" => "About Me"

    );
    $postArray['#3'] = array(
        "sectionName" => "Work Experience"

    );
    $postArray['#4'] = array(
        "sectionName" => "Favorites"

    );
    $postArray['#5'] = array(
        "sectionName" => "Hobbies"

    );
    $postArray['#6'] = array(
        "sectionName" => "Creations"

    );
    // $postArray="hi";
    return $postArray;
}


//need to make a 2D array and then maybe ask Erika about how to do the numbers  

// $languages = array();
  
// $languages['Python'] = array(
//     "first_release" => "1991", 
//     "latest_release" => "3.8.0", 
//     "designed_by" => "Guido van Rossum",
//     "description" => array(
//         "extension" => ".py", 
//         "typing_discipline" => "Duck, dynamic, gradual",
//         "license" => "Python Software Foundation License"
//     )
// );
  
// $languages['PHP'] = array(
//     "first_release" => "1995", 
//     "latest_release" => "7.3.11", 
//     "designed_by" => "Rasmus Lerdorf",
//     "description" => array(
//         "extension" => ".php", 
//         "typing_discipline" => "Dynamic, weak",
//         "license" => "PHP License (most of Zend engine
//              under Zend Engi