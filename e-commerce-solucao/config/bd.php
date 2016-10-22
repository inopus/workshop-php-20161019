<?php
    global $db;
    $db = new PDO("mysql:host=localhost:3306;dbname=workshop", "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
?>