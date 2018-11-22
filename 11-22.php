<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/11/22
 * Time: 8:25
 */

function CountSteps($x,$y){
    if ($x==0 && $y==0){
        return 1;
    }else if ($x==0 || $y==0){
        return 1;
    }else{
        return strlen($x-1)+strlen($y-1);
    }
}

echo CountSteps(0,1);