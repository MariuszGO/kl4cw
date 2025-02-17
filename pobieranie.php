<?php
$polaczenie = mysqli_connect("localhost","root","","uczniowie");

$zapytanie = "SELECT * FROM dane";

$wynik =  mysqli_query($polaczenie,$zapytanie);

while($tablica = mysqli_fetch_row($wynik)){

    echo $tablica[0] . ' ' . $tablica[1] . " " . $tablica[2] . "<br>";

}

echo '******************************************<br><br>';
$wynik =  mysqli_query($polaczenie,$zapytanie);
while($tablica = mysqli_fetch_assoc($wynik)){

    echo $tablica['id'] . ' ' . $tablica['imie'] . " " . $tablica['wiek'] . "<br>";

}


?>