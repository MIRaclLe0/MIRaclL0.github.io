<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into kelas(
    nama_kelas,angkatan)
     values(
         '$nama_kelas','$angkatan'
    )
");
_goto(_page('kelas'));