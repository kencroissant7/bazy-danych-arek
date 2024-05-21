<?php 
$polaczenie = new mysqli("localhost", 'root', "" , "praca", 3306);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenia</title>
</head>
<body>
    <fieldset style="border-radius: 25px;width: 600px;padding: 20px; margin: auto; text-align: center; color: red;">
        <legend>JavaScript to super język</legend>
        <div style="width: 600px;padding: 20px;">
        <form name="myform" id="myform">
            <select name="dane" id="dane">
            <option value="wybierz">wybierz</option>
                <?php 
                $zapytanie = $polaczenie->query("SELECT `id`, `m`, `g`, `h`, `v` FROM `energia`;");
                while($wiersz = $zapytanie->fetch_assoc()){
                    $energia = json_encode($wiersz);
                    echo("
                    <option value='$energia'>{$wiersz['id']}</option>
                    ");
                }
                ?>
                
            </select>
        </form>
        </div>
    </fieldset>
    <br>
    <div id="wynik" style="border: 1px solid green; border-radius: 25px;width: 600px;padding: 20px; margin: auto; text-align: center; color: green;">
    
    </div>
    <script>
        let mySelect = document.getElementById("dane");
        mySelect.addEventListener("change", (event)=>{
            let energia = JSON.parse(event.target.value);
            let masa = parseFloat(energia.m);
            let grawitacja = parseFloat(energia.g);
            let wysokosc = parseFloat(energia.h);
            let predkosc = parseFloat(energia.v);

            let Ek = (masa * Math.pow(predkosc,2)) / 2;
            let Ep = masa * grawitacja * wysokosc;
            let Em = Ek + Ep;

            let wynik = document.getElementById("wynik");
            wynik.innerHTML = `
            Energia kinetyczna = ${Ek} <br>
            Energia potencjalna = ${Ep} <br>
            Energia mechaniczna = ${Em} <br>
            `
            
        });
    </script>
</body>
</html>
<?php $polaczenie->close();?>