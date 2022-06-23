<?php

$c = '123123';
$a = 'https://www.writephponline.com/harvider_singh_46556_123';

$b = 'https://www.writephponline.com/harvider_harry_46556.jpg';

$string = $a;
$string1 = $b;
$find = end(explode('_', $a));
$find1 = end(explode('_', $b));
$replace = $c;
$result = preg_replace(strrev("/$find/"),strrev($replace),strrev($string),1);
$result1 = preg_replace(strrev("/$find1/"),strrev($replace),strrev($string1),1);
echo strrev($result); //output: this is my world, not my farm
echo"<br>";
echo strrev('gpj.'.$result1);
?>