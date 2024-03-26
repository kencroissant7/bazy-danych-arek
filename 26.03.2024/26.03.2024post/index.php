<?php 
include_once ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dywizja Tęczowa Szósta: Oblężenie Toma Clancy'ego </h1>
    <?php 
    $zap = $con->query("select `idu`, `imie`,`nazwisko` from `uczniowie`");
    ?>
    <?php 
    while(list($idu,$imie, $nazwisko)=mysqli_fetch_row($zap)){
    echo("
        <li>
           
           <form action='delete.php' method='post'>
                    $imie $nazwisko
                <input type='hidden' name='zmk' value=$idu />
                <input type='submit' value='USUN' />
           </form>
        </li>");
    }
    ?>
    
</body>
</html>
<?php 
$con->close();
?>