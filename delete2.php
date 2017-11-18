<?php
include "htmlcode.php";
$cw=getcwd();
define("cwd",$cw);
define("ds", DIRECTORY_SEPARATOR);
$alltext=$_GET['get'];
$ar=explode(", ",$alltext);
var_dump($ar);
//@unlink($ar[0]);