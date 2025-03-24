<?php  
session_start();
require_once("db.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Górska</title>
</head>
<body>
    <header>
        <h1>Heloł na mojej stronce</h1>
    </header>

    <section class="main">

        <section class="lewa">
            <ul>
                <?php if (isset($_SESSION['user_name'])): ?>
                    <span>Witaj, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
                    <a href="logout.php">Wyloguj</a>
                <?php else: ?>
                    <a href="zarejestruj.php">Zarejestruj</a>
                    <a href="zaloguj.php">Zaloguj</a>
                <?php endif; ?>
            </ul>
        </section>

        <section class="prawa">
            <?php if (isset($_SESSION['user_name'])): ?>
                <h2>Galeria Górska</h2>
                <div class="galeria">
                <?php if (isset($_SESSION['user_name'])): ?>
                    <img src="https://zakopane.com/wp-content/uploads/2017/10/tatry-podzia%C5%82.jpg">
                <?php else: ?>
                    <p>Brak zwartosci</p>
                <?php endif; ?>
                    <?php
                    
                 
                    $sql = "SELECT nazwa, opis FROM gory";
                    $result = $conn->query($sql);

                    if (isset($_SESSION['user_name'])) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='gora'>";
                            echo "<h3>" . htmlspecialchars($row['nazwa']) . "</h3>";
                            echo "<p>" . htmlspecialchars($row['opis']) . "</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>Brak danych do wyświetlenia.</p>";
                    }

                    
                    ?>
                </div>
            <?php else: ?>
                <p>Zaloguj się, aby zobaczyć zawartość.</p>
            <?php endif; ?>
        </section>

    </section>

    <footer>
        <b><i>Autor: ja</i></b>
    </footer>
</body>
</html>
