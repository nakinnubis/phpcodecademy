<?php
echo "I am reLearning PHP ";

// working with concatenation

echo "I am aiming to be world class software developer". ' '.' ' ."I am here to be the best";

// comparison operator is used to evalute true or false if values are equal or not..

$ageAllowed = 18;
 if ($ageAllowed < 18) {
     # code...
     echo "You are not allowed to play this game";
 }

 // adding else to the if 

 if ($ageAllowed > 19) {
     # code...
     echo "You are allowed to play this game";
 } else {
     # code...
     echo "You are not allowed to play this game";
 }

 // control flow using switch statement 
$nameLength = "Akinnubi";
$myNameLngth = strlen($nameLength);
 switch ($myNameLngth < 10) {
     case 0:
         # code...
         echo "you have 1";
          break;
    case 1:
        echo "you have 2";
         break;
    case 2: 
        echo "You have 3";
        break;
    case 3: 
        echo "You have 4";
        break;
    case 4:
        echo "You have 5";
        break;
    case 5: 
        echo "You have 6";
        break;
    case 6:
        echo "You have 7";
        break;
    case 7:
        echo "You have 8";
        break;
    case 8:
        echo "You are even and you are out";
        break;     
     default:
         # code...
         echo "Good bye nothing more to try";
         break;
 }
 
 // array working with array_search
 $myArray = array('firstitem' =>"Bread" , 'seconditem' =>"butter");

?>