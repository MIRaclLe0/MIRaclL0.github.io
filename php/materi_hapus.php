<?php
include_once "conn.php";
$id = $_GET['id'];

sql("delete from materi where id_materi=$id");
_goto(_page('dashboard_guru'));