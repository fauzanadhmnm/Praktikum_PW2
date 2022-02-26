<?php

//bisa menambahakan key dan value
//gunakan echo di indeksnya
 
 $mahasiswa = [
    ["nama" => "sabiq", "NIM" => "0110"],
    ["nama" => "kamu", "NIM" => 0110],

];
    echo $mahasiswa[0]["nama"];
    echo "<br />";
    echo $mahasiswa[1]["nama"];
    echo "<br />";
    foreach ($mahasiswa as $mhs){
        echo $mhs["nama"];
    };




 


?>