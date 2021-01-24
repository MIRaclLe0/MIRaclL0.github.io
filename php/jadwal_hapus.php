<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from jadwal where id_jadwal=$id");
_goto(_page('jadwal'));