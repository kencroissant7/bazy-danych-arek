<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z samochodami</title>
    <link rel="stylesheet" href="">
</head>
<body>
 <form action="login.php" method="post">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="password" placeholder="Hasło">
    <br>
    <?php
    if(isset($_SESSION['e_zal'])){
        echo'<div class="error1">'.$_SESSION['e_zal'].'</div>';
        unset($_SESSION['e_zal']);
    }
    ?>
    <button type="submit">Zaloguj się</button>
    <div class="none"><p> Nie posiadasz konta?<br> <a href="zarejestruj.php" >Zarejestruj tutaj!</a></p></div>
 </form>
    </main>

    

    <footer>
    </footer>
</body>
</html>
