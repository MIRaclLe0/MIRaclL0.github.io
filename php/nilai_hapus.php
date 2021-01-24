<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from nilai where id_nilai=$id");
_goto(_page('nilai'));