<?php
// class auto loader
require "includes/constants.php";
require "includes/dbConnection.php";

function classAutoLoad($classname)
{
    $directories = ["Content", "Layout", "Menus","forms","processes"];

    foreach ($directories as $dir) {
        $filename =  dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if (file_exists($filename) and is_readable($filename)) {
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

//Create instance of all classes

$Objlayout = new layout();
$ObjMenus = new menus();
$Objheadings = new headings();
$ObjCont = new contents();
$ObjForm=new user_forms();
$conn = new dbConnection(DBTYPE, HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);


// Create process instances

    $ObjAuth = new auth();
    $ObjAuth->signup($conn);

// require "includes\constants.php";
// require "includes\dbConnection.php";

// $conn = new dbConnection(DBTYPE, HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);


