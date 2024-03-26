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
    <?php 
    $zap = $con->query("select `idu`, `imie`,`nazwisko` from `uczniowie`");
    ?>
    <?php 
    while(list($idu,$imie, $nazwisko)=mysqli_fetch_row($zap)){
    echo("
        <li>
            <a href='http://localhost:8080/26.03.2024get/delete.php?zmk=$idu'>$imie $nazwisko</a>
        </li>");
    }
    ?>
    
</body>
</html>
<?php 
$con->close();
?>