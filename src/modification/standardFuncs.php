<?php
count($a);
function count() {}; count($a);
sort($a);
usort($a, function($a,$b){
  return 1;}
);
array_pop($a);
array_keys($a);
array_values($a);
array_shift($a);
pow(1);
max(1,2);
$max = function(){}; max(1,2);
array_unshift($a,$b,$c);
array_push($a,1,2+2,3);
array_slice($a,1,2);
array_reverse($a);
array_splice($a,1,2,$z);
array_walk($a,$z,1);
array_reduce($a,function(){});
array_filter($a,function(){});
array_map(function(){},$a);
implode('str', $a);
explode('str', $a, 2);
function_exists('bla');
function_exists($z);
class_exists($z);