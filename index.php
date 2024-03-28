<?php

$project_location = "/bu_Novi/2_grpn1";
$me = $project_location;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $me.'/' :
        require "view/home.php";
        break;
    case $me.'/about' :
        require "view/tentang.php";
        break;
    case $me.'/data' :
        require "view/databarang.php";
        break;
    case $me.'/home' :
        require "view/home.php";
        break;
    case $me.'/profile' :
        require "view/profile.php";
        break;

    default:
    http_response_code(404);
    echo "masih g work ya gustiiii T~T";
    break;
}

?>