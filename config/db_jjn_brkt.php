<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=login', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'class/fungsi.php';

$brg = new hikam_23($con);

?>