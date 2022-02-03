<?php
    //$anzahl_aufrufe = 1;
    
    $anzahl_aufrufe++;
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    
    
?>

<!-- 
    Ändert sich der Counter nachdem die erste Zeile auskommentiert wurde?
    Nein

    Wieso ändert er sich nicht?
    Die Zahl ändert sich nicht da der Code immer wider neu Initialisiert wird und die Zahl nicht gespeichert wird
 -->