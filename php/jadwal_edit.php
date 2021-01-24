<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);
$id = $_GET['id'];
sql("update jadwal set
    id_kelas='$id_kelas',
    id_guru='$id_guru',
    id_mapel='$id_mapel',
    hari='$hari',
    jam='$jam' where id_jadwal=$id
");
_goto(_page('jadwal'));