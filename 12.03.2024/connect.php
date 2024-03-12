<?php 
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$dbname = 'radosc';

try{
    $connect = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port."charset=utf-8",$user,$password);
    echo("<h3>Połączona z bd</h3>");
}catch(PDOException $e) {
    echo("<h3>Error połączenia z bd</h3>");
    die();
}
?>