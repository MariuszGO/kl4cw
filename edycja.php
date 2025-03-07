<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane o uczniach - formularz</title>
</head>
<body>

<?php 
$id = $_GET['id'];
$imie = $_GET['imie'];
$wiek = $_GET['wiek'];


?>


<form action="nadpisz.php" method="get">
    <input type="hidden" value="<?php echo $id;  ?>" name="id">
    <label for="imie">Podaj imie: </label>
    <input type="text" name="imie" value="<?php echo $imie;  ?>"><br>
    <label for="wiek">Podaj wiek: </label>
    <input type="number" name="wiek" max="150" min="1" value="<?php echo $wiek;  ?>"><br>
    <button> Wyślij </button>
</form>

    
</body>
</html>