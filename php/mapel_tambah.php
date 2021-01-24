<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into mapel(
    nama_mapel,kkm)
     values(
         '$nama_mapel','$kkm'
    )
");
_goto(_page('mapel'));