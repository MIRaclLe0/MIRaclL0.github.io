<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from mapel where id_mapel=$id");
_goto(_page('mapel'));