<?php
$id = $_GET['id'];
$im = $_GET['imie'];
$wiek = $_GET['wiek'];
echo "
<a href='wysylanie.html'>Wysyłanie</a>
<a href='pobieranie.php'>Wyświetl</a>
";
echo $im . " " . $wiek;

$polaczenie = mysqli_connect("localhost","root","","uczniowie");

$zapytanie = "UPDATE dane set imie='$im' , wiek = $wiek WHERE id = $id; ";

$wynik =  mysqli_query($polaczenie,$zapytanie);

//echo $wynik;

if ($wynik == 1){
    echo "Poszło";
}
else{
    echo "Nie poszło";
}

//mysqli_query($polaczenie,"INSERT INTO dane VALUES ('','$im',$wiek)");

?>