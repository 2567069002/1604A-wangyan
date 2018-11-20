<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/11/20
 * Time: 8:27
 */

function NumberOf1($n){
    $count = 0;
    $flag = 1;
    while ($flag != 0){
        if (($n & $flag) != 0){
            $count++;
        }
        $flag = $flag << 1;
    }
    return $count;
}

echo NumberOf1(10);