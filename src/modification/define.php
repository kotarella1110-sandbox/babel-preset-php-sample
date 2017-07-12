<?php
defined('foo');
defined('%z');
define('foo', 2);
define('1foo', 2);
function b(){define('foo', 2);}
function b(){define('foo bar', 2);}
define("foo$bar", "$baz quz");