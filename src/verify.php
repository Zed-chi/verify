<?php
//q
namespace Zedchi\Verify;

class Verify
{
    public function parse($str)
    {
        /**/
        $re = '/[^\(,\),\n,\t,\r," "]/';
        if (strlen($str) == 0){
            return false;
        }
        if (preg_match($re, $str)) {
            throw new \Exception("Unknown Symbol");
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
