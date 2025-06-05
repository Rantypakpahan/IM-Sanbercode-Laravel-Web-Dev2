<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'Ape.php';

    $sheep = new Animal("shaun");

        echo "Nama Hewan : " . $sheep->name . "<br>"; // "shaun"
        echo "Jumlah Kaki : " . $sheep->legs . "<br>"; 
        echo "Jenis darah : " . $sheep->cold_blooded . "<br> <br> "; // "no"


    $kodok = new Frog("buduk");
    echo "Nama Hewan : " . $kodok->name . "<br>";
    echo "Jumlah Kaki : " . $kodok->legs . "<br>"; 
    echo "Jenis darah : " . $kodok->cold_blooded . "<br>"; // "no"
    echo "Jump : " .  $kodok->jump() . "<br> <br>" ; // "hop hop"

    $sungokong = new Ape("kera sakti");
     echo "Nama Hewan : " . $sungokong->name . "<br>";
    echo "Jumlah Kaki : " . $sungokong->legs . "<br>"; 
    echo "Jenis darah : " . $sungokong->cold_blooded . "<br>"; // "no"
    echo "Yell : " . $sungokong->yell() // "Auooo"

    
?>