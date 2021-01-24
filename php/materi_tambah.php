<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

$folderUpload = __DIR__ . "/uploads";

# periksa apakah folder sudah ada
if (!is_dir($folderUpload)) {
    # jika tidak maka folder harus dibuat terlebih dahulu
    mkdir($folderUpload, 0777, $rekursif = true);
}
$sv = $_SERVER['HTTP_HOST'];
$filemateri = (object) @$_FILES['materi'];
$uploadSukses = move_uploaded_file(
    $filemateri->tmp_name, "{$folderUpload}/{$filemateri->name}"
);
$id_guru = $_SESSION['user']['id_guru'];
$link = "/php/uploads/{$filemateri->name}";
sql("insert into materi(
    id_guru,id_mapel,judul,kelas,materi,url_materi)
     values(
         '$id_guru','$id_mapel','$judul','$kelas',
         '{$filemateri->name}', '$link'
    )
");
_goto(_page('dashboard_guru'));