
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        include_once("connect.php");
    ?>
    <form action="delete.php" method="post">
        <select name="select" onchange="this.form.submit()">
            <option value="">WYBIERZ Z PODANYCH</option>
            <?php 
                $quest = "SELECT ido, nazwa, kolor FROM owoce";
                foreach($conn->query($quest) as $wiersz){
                    $ido = $wiersz['ido'];
                    $nazwa = $wiersz['nazwa'];
                    $kolor = $wiersz['kolor'];
                    echo <<<TX
                    <option value="$ido">$nazwa, $kolor </option>
                    TX;
                }
            ?>
        </select>
    </form>
    <?php
    $conn = null;
    ?>
    <footer><p class="nounderline">Jest SiGmA !!!</p><p class="footer">Autor: ja</p></footer>
</body>
</html>
