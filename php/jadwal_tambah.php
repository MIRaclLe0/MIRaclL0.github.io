<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into jadwal(
    id_kelas,id_guru,id_mapel,hari,jam)
     values(
         '$id_kelas','$id_guru','$id_mapel',
         '$hari','$jam'
    )
");
_goto(_page('jadwal'));