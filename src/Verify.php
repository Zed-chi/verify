<?php
namespace Zedchi;

class Verify
{
    public function __construct(){}
    public function verify($str)
    {
        /**/
        $re = '/[^\(,\),\n,\t,\r," "]/';
        if (strlen($str) == 0){
            throw new \InvalidArgumentException("Empty string");
        }
        if (preg_match($re, $str)) {
            throw new \InvalidArgumentException("Unknown Symbol");
        }
        /**/
        
        $x = 0;
        for ($i = 0; $i < strlen($str); $i++) 
        {
            if ( $str[$i] == "(" ) {$x++;} else if ($str[$i] == ")") {$x--;}
            if ( $x < 0 ) {return false;}
        }
        if ($x == 0){return true;}
        else{return false;}
    }
}
