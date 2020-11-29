<?php
$a = array(1, 2, 3, 4);
var_dump($a);echo "<br />";
array_push($a, 5);
var_dump($a);echo "<br />";
unset($a[0]);
var_dump($a);echo "<br />";
$b = array('a' => 10);
var_dump($b);echo "<br />";
$b['b'] = 20;
var_dump($b);echo "<br />";
unset($b['a']);
var_dump($b);echo "<br />";