<?php
// class auto loader

function classAutoLoad($classname){
    $directories =["Content","Layout","Menus"];

    foreach($directories as $dir){
        $filename =  dirname(__FILE__). DIRECTORY_SEPARATOR . $dir .DIRECTORY_SEPARATOR . $classname . ".php";
            if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
            }
     } 
}  

spl_autoload_register('classAutoLoad');

//Create instance of all classes


// require_once "Layout\layout.php";
$Objlayout = new layout();
// require_once "Menus\menus.php";
$ObjMenus = new menus();
// require_once "Content\heading.php";
$Objheadings = new headings();



// $arr =["black","white","red","blue"];
// foreach($arr as $colour){
//     print $colour . "<br>";
// }
// print dirname(__FILE__);
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";
// if(file_exists("index.php") AND is_readable("index.php")){
//     print "yesssss";
// }else{
//     print "nooooo";
// }
?>