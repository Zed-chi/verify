<?php
require "src/verify.php";
use  Zedchi\Verify;
$a = new Verify\Verify();

try
{
	echo $a->parse("()()")."\n";
	echo $a->parse("(ывф))()4");
}
catch(Exception $e){
	echo "fuck";
}
