
<?php
    //variable user = dibuat oleh user
    $nama = 'Fauzan';
    $umur = 20;
    $berat = 52;

    echo 'nama saya adalah ' .$nama. ' yang berumur ' .$umur. ' tahun dengan berat ' .$berat. 'kg.';
    echo "<br />";
    echo "<h1 style='color: red'>Nama saya adalah $nama, Umur saya $umur, dengan berat $berat .</h1>" ;
    echo "<br />";

    //variable system = dibuat oleh system PHP langsung dengan pke $_SERVER
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";


    //variable konstan = variable yang nilainya gk bisa didefinisi ulang
    define('makanan', 'sushi');
    echo makanan;
?>