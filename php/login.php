<?php
include_once "conn.php";
extract($_POST);

if (!isset($tipe)) {
    _goto("/rpl/html/login.php");
}

switch ($tipe) {
    case "Admin":
        $query = "select * from admin where
        username='$username' and
        password='$password' ";
        break;
    case "Kepala Sekolah":
        $query = "select * from guru where
        nip='$username' and
        jabatan='kepsek' and
        tanggal_lahir=STR_TO_DATE('$password', '%d/%m/%Y') ";
        break;
    case "Guru":
        $query = "select * from guru where
        nip='$username' and
        tanggal_lahir=STR_TO_DATE('$password', '%d/%m/%Y') ";
        break;
    case "Siswa":
        $query = "select * from siswa where
        nis='$username' and
        tanggal_lahir=STR_TO_DATE('$password', '%d/%m/%Y') ";
        break;
}
$user = first(
    sql($query)
);
if (count($user) < 1) {
    _goto(_page("login"));
}
$_SESSION['user'] = $user;
switch ($tipe) {
    case "Kepala Sekolah":
    case "Guru":
        $_SESSION['user']['username'] = $user['nama_guru'];
        break;
    case 'Siswa':
        $_SESSION['user']['username'] = $user['nama_siswa'];
}
$_SESSION['tipe'] = $tipe;
_goto(_page("dashboard"));