<?php
try {hey();} catch(Exception $e) {bye($e);}
try{}catch(\Exception $e){}
throw new Error();
try{}catch(Foo $e){$a=1;}
function foo(){static $z; try{}catch(Foo $f){$f=1;}catch(Bar $b){$b=1;$z=1;}}
try{}catch(Foo | Bar $e){$a=1;}
try{}catch(Foo $e){}catch(\Exception $z){$a=1;}