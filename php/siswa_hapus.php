<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from siswa where id_siswa=$id");
_goto(_page('dashboard'));