<?php
new Foo($bar);
class Foo {};
class Foo2 extends Bar {};
class Foo3 extends Foo\Bar {};
class Foo4 extends Foo\Bar\Baz\Quz {};
class Foo5 extends \Foo\Bar {};
class Foo6 {function __construct($bla){$this->foo=1;}};
class Foo7 {function __construct($bla){$this->${foo}=1;}};
class Foo8 {function __construct($bla){parent::foo();}};
class Foo9 {function __construct($bla){parent::__construct();}};
class Foo10 {function bar($z){$this->{$meta} = 2;}};
class Foo11 {static function bar($z){self::bar();}};
class Foo12 {function bar(){self::CON;}};
class Foo13 {private function bar($z=1){} protected function quz(){$this->bar();}};