<?php
$im = $_GET['imie'];
$wiek = $_GET['wiek'];


echo $im . " " . $wiek;

$polaczenie = mysqli_connect("localhost","root","","uczniowie");

$zapytanie = "INSERT INTO dane VALUES ('','$im',$wiek)";

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