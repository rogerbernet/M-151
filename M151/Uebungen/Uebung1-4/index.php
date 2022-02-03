<?php

    if(isset($_GET['username'])){
        $username = $_GET['username'];
        echo "Hallo {$username}!<br />";
    }
    else{
        echo "username fehlt";
    }


    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>