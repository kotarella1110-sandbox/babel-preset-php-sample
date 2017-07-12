<?php
preg_replace("#t\\*ex*t#i", $y, $z);
preg_replace_callback("/(reg)/", $y, $z);
preg_replace("$dynamic", $y, $z);