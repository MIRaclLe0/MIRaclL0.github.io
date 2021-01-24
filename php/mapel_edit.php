<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("update mapel set
    nama_mapel=
         '$nama_mapel',kkm='$kkm'
");
_goto(_page('mapel'));