<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from guru where id_guru=$id");
_goto(_page('guru'));