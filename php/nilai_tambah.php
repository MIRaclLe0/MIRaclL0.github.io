<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into nilai(
    id_siswa,id_jadwal,
    uh1,uh2,uh3,uh4,uh5,
    tugas1,tugas2,tugas3,tugas4,
    harian,uas,raport)
     values(
         '$id_siswa','$id_jadwal',
         '$uh1','$uh2','$uh3','$uh4','$uh5',
         '$tugas1','$tugas2','$tugas3','$tugas4',
         '$harian','$uas','$raport'
    )
");
_goto(_page('nilai'));