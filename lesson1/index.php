<?php
$bool = True;
$a_int = 5;
$b_float = 3.14;
$c_str = 'New text';
$d_str = "Toral $a_int";

echo "$bool<br />";
echo "$a_int<br />";
echo "$b_float<br />";
echo "$c_str<br />";
echo "$d_str<br />";


$sum = $a_int + $a_int;
$den = $a_int - $b_float;
$mult = $a_int * $a_int;
$def = $a_int / $b_float;
$def_mod = $a_int % $a_int;

var_dump($sum);
var_dump($den);
var_dump($mult);
var_dump($def);
var_dump($def_mod);

var_dump($c_str === $d_str);
var_dump($a_int > $b_float);
var_dump($b_float != $a_int);
var_dump( $b_float < $a_int );
var_dump($a_int <=> $b_float);
?>