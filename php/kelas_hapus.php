<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from kelas where id_kelas=$id");
_goto(_page('kelas'));