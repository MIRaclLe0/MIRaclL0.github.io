<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);
$id = $_GET['id'];
if (sql("update siswa set
         nama_siswa='$nama',
         tempat_lahir='$tempat_lahir',
         nis='$nis',tanggal_lahir='$tanggal_lahir',
         jenis_kelamin='$jk',kelas='$kelas',
         alamat='$alamat',agama='$agama',
         tanggal_masuk='$tanggal_masuk',
         nama_ayah='$ayah',nama_ibu='$ibu',
         pekerjaan_ayah='$p_ayah',
         pekerjaan_ibu='$p_ibu'
         where id_siswa=$id
") == true) {
    echo "sukses";
} else {
    echo "error";
}
_goto(_page('dashboard'));