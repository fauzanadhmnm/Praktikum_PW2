<?php
 
 //ARRAY => bisa menyimpan banyak nilai, gk bisa pke echo langsung harus pke index(posisi)
 $mahasiswa = ['sabiq', 'saya', 'kamu', 'dia'];
 echo $mahasiswa[0];

 //var dump buat cek array
 //di print pke urutan angka, dimulai dari 0
 echo "<br />";
 echo $mahasiswa[2];

 //cara mengeluarkan semua nilai array bisa pke foreach(perulangan)
 foreach ($mahasiswa as $mhs){
    echo $mhs;
    echo "<br />";
 }


 

?>