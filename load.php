<?php
// class auto loader

function classAutoLoad($classname)
{
    $directories = ["Content", "Layout", "Menus"];

    foreach ($directories as $dir) {
        $filename =  dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if (file_exists($filename) and is_readable($filename)) {
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
$ObjCont = new contents();

require "includes\constants.php";
require "includes\dbConnection.php";

$conn = new dbConnection(DBTYPE, HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);
