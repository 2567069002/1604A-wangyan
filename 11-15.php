<?php

$arr = array(1,2,4,7,15);
$S = 15;
$low = 0;
$heigh = count($arr) - 1;

for ($i = 0; $i < count($arr); $i++){
    if ($arr["$low"] + $arr["$low"] == $S){
        break;
    }else if($arr["$low"] + $arr["$low"] > $S){
        $heigh--;
    }else{
        $low++;
    }
}