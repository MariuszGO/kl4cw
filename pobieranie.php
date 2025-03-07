<?php
$polaczenie = mysqli_connect("localhost","root","","uczniowie");

$zapytanie = "SELECT id,imie,wiek FROM dane";

$wynik =  mysqli_query($polaczenie,$zapytanie);
/*
while($tablica = mysqli_fetch_row($wynik)){

    echo $tablica[0] . ' ' . $tablica[1] . " " . $tablica[2] . "<br>";

}

echo '******************************************<br><br>';
*/

$wynik =  mysqli_query($polaczenie,$zapytanie);
echo "<table border=1>";
while($tablica = mysqli_fetch_assoc($wynik)){

    $id = $tablica['id'];
    $imie = $tablica['imie'];
    $wiek = $tablica['wiek'];

    echo '<tr><td>'. $tablica['id'] . '</td><td> ' . $tablica['imie'] . "</td><td> " . $tablica['wiek'] 
    . "</td><td> <a href=edycja.php?id=$id&imie=$imie&wiek=$wiek>Edytuj</a> " ."</td></tr>";

}
echo "</table>";

?>