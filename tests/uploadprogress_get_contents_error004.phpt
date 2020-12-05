--TEST--
uploadprogress_get_contents - Warns when too few arguments

--SKIPIF--
<?php
if (!extension_loaded('uploadprogress')) exit('skip extension not loaded');
if (PHP_MAJOR_VERSION < 8) exit('skip test only valid on PHP 8+');

--INI--
uploadprogress.get_contents = On

--FILE--
<?php
$contents = uploadprogress_get_contents('fileIdentifier');
var_dump($contents);

--EXPECTF--
Fatal error: Uncaught ArgumentCountError: uploadprogress_get_contents() expects at least 2 %s, 1 given in %s/uploadprogress_get_contents_error004.php:%d
Stack trace:
#0 %s/uploadprogress_get_contents_error004.php(%d): uploadprogress_get_contents('fileIdentifier')
#1 {main}
  thrown in %s/uploadprogress_get_contents_error004.php on line %d
