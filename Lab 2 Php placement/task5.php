<?php
    for($i =10; $i<= 100; $i++){
        if($i % 2==0){
            continue;
        }
        else{
            echo $i ."\n";
        }
    }
?>