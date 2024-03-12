<?php 
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body><p>Menu: kliknij w <b>"Lista"</b> aby zobaczyć więcej</p>
    <div class="box">
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li> <a href="lista.php">Lista</a></li>
        </ul>
    </nav>
    </div>
    <?php 
     $zapytanie = ("SELECT idw,nazwa FROM wydarzenia;");
    ?>
<form action="efekt.php" method="post">
        <select name="idw" onchange="this.form.submit();">

        <?php 
            foreach($connect->query($zapytanie) as $wiersz){
                echo "<option value=".$wiersz['idw'].">".$wiersz['nazwa']."</option>";
            }
    ?>         
        </select>
    </form>
    <?php 
    
    ?>
</body>
</html>

<?php 
$connect=null;
?>