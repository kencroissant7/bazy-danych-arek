<?php
$serwer = 'localhost';
$dbname = 'baza09042024';
$username = 'root';
$password = '';
$port = 3306;
try{
    $conn = new PDO('mysql:host='.$serwer.';dbname='.$dbname.';port='.$port.';charset=utf8', $username, $password);
    echo("<h1 class='con'>POŁĄCZENIE POMYŚLNIE! <br> Połączono z bazą przez PDO </h1>");
}
catch(PDOException $event){
    echo("<h1 class='con1'>Błąd połączenie z bazą przez PDO</h1>");
    echo($event);
    die();
}
?>