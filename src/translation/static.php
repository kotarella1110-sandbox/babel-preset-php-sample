<?php
function foo() {static $bar; $bar=1;}
function foo() {global $bar; $bar=1;}
function foo() {static $bar,$baz=1; $bar=1;}