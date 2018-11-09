<?php
function php_decrypt($str)  
{  
         $encrypt_key = 'abcdefghijklmnopqrstuvwxyz1234567890';  
         $decrypt_key = 'ngzqtcobmuhelkpdawxfyivrsj2468021359';  
        if ( strlen($str) == 0) return  false;  
        for ($i=0;  $i<strlen($str); $i ++){  
                for ($j=0; $j <strlen($decrypt_key); $j ++){  
                        if ($str[$i] == $decrypt_key [$j]){  
                                $enstr .=  $encrypt_key[$j];  
                                break;  
                        }  
                }  
        }
        return $enstr;
}