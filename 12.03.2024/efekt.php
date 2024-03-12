<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p class="p1">Menu: kliknij w <b>"Lista"</b> aby zobaczyć więcej</p>
    <div class="box1">
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li> <a href="lista.php">Lista</a></li>
        </ul>
    </nav>
    </div>
    <div class="div1">
    <?php
echo("<center>tutaj pobieram zawartość z poszczególnego <b><i>wydarzenia</i></b><center>");
echo("<br>");
if(isset($_POST['idw'])){

    require_once("connect.php");
    $idw = $_POST['idw'];
    $zapytanie = ("SELECT nazwa FROM efekt WHERE idw=$idw;");

    foreach($connect->query($zapytanie) as $wiersz){
        echo "<p><h4>Efekty to: ".$wiersz['nazwa']."<h4></p>";
    }
    $connect=null;

}else{
    echo("nie kukej chopie...");
}
?> 
   </div> 
</body>
</html>
