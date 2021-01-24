<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("update kelas set
    nama_kelas=
         '$nama_kelas',angkatan='$angkatan'
");
_goto(_page('kelas'));