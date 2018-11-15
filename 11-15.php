<?php

$arr = array(1,2,7,11,14);
FindNumbersWithSum($arr,15);

function FindNumbersWithSum($arr, $sum){
    $low = 0;
    $heigh = count($arr) - 1;
    for ($i = 0; $i < count($arr); $i++){
        if ($arr["$low"] + $arr["$heigh"] == $sum){
            echo $sum;
            break;
        }else if($arr["$low"] + $arr["$heigh"] > $sum){
            $heigh--;
        }else{
            $low++;
        }
    }
}