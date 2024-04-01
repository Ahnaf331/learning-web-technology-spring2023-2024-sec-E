<?php
    $array = array(1,2,3,4,5,6,7);

    $searchElement = 12;
    $found = false;
    foreach($array as $value){
        if($array == $searchElement){
            $found = true;
            break;
        }
    }
    if($found){
        echo "The element $searchElement is found in the array.\n";
    }
    else{
        echo"The element $searchElement is not found in the array.\n";
    }

?>