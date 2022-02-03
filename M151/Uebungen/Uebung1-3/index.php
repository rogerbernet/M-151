<?php

session_start();


if (isset($_SESSION['anzahl_aufrufe'])) {
    $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
}else{
    $anzahl_aufrufe = 1;
}

echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";

$_SESSION['anzahl_aufrufe']++;

?>