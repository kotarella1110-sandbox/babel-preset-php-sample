<?php
function bar($foo) {return $foo + 1;}
function bar($foo) {$foo = 2;}
function bar(TypeName $foo) {$foo = 2;}
$a=1; function bar() {$a = 2;}
$z = function() use($x){$x=1;$y=2;};
$z = function(){static $n;};
if ($a = 1) {if ($b = 2 && $c = 2) {}}