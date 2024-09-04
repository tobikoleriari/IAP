<?php
require_once "fnc.php";

$Obj = new fnc();

$arr =["black","white","red","blue"];
foreach($arr as $colour){
    print $colour . "<br>";
}
print dirname(__FILE__);
print "<br>";
print $_SERVER["PHP_SELF"];
print "<br>";
print basename($_SERVER["PHP_SELF"]);
print "<br>";
if(file_exists("index.php") AND is_readable("index.php")){
    print "yesssss";
}else{
    print "nooooo";
}
?>