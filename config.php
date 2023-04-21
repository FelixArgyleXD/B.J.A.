<?php
ob_start();
date_default_timezone_set("America/Chicago");

try {
    $con = new PDO("mysql:dbname=blilienthal;host=datadev.devcatalyst.com", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    echo "Connection Failed:". $e->getMessage();
}
?>