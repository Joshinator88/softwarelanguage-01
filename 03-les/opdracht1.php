
<?php

// requireing the array
require "./includes/array.includes.php";

// this function asks for a mltidimensianal array as parameter and then prints it out
function multidimensionalArrayPrinter ($members) {
    foreach ($members as $member => $charachteristics) {
        echo "<strong><a href='./details.php?user=$member'>" . $member . "</a></strong> <br>";
        foreach ($charachteristics as $charachteristic) {
            echo $charachteristic . "<br>";
        }
        echo "<hr>";
    }
}

// a function that generates a random number and then echos the value of 
// the passed in array on that index 
function randomArray ($array) {
    $randomValue = random_int(0, count($array)-1);
    echo $array[$randomValue];
}



// an array tot test tehe randomArray function
$docenten = ['Stephan', 'Arie', 'Wout', 'Rene', 'Jan'];


multidimensionalArrayPrinter($members);

randomArray($docenten);