<?php

function FirstNotRepeatingChar($str){
    $a = array();
    $b = array();
    for($i = 0;$i < strlen($str);$i++){
        if(!isset($a[$str[$i]])){
            $a[$str[$i]] = 1;
            $b[$str[$i]] = $i;
        }else{
            $a[$str[$i]]++;
        }
    }
    foreach ($a as $k => $v){
        if($v == 1){
            return $b[$k];
        }
    }
    return -1;
}
echo FirstNotRepeatingChar('kalsjgklangklajglakda');