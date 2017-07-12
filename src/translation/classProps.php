<?php
class Foo {const Z=1;}
class Foo2 {static $z=1;}
class Foo3 {private static $z=1; static function x(){self::$z;self::${z()};}}
class Foo4 {var $z=1;}
class Foo5 extends Bar {var $z=1;}
class Foo6 extends Bar {var $z=1; function __construct(){hi();}}
class Foo7 extends Bar {var $z=1; function __construct(){parent::__construct();hi();}}