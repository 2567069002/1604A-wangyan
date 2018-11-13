<?php

function Sum_Solution($n)
{
    $arr = range(1,$n);
    $array = array_sum($arr);
    return $array;
}
echo Sum_Solution(5);


function Sum_Solution($n){
    $num = 0;
    for ($i = 1;$i <= $n;$i++){
        $num = $num+$i;
    }
    return $num;
}

echo Sum_Solution(5);