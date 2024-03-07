<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

#$db="bdd";
#$dbhost="10.5.40.212";
#$dbport=3306;
#$dbuser="root";
#$dbpasswd="root";

#$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db, $dbuser, $dbpasswd);

$pdo = new PDO('mysql:host=10.5.40.212;dbname=bdd', 'root', 'root');

var_dump($dbh);

?>