<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);
$id = $_GET['id'];
if (sql("update guru set
         nama_guru='$nama_guru',
         nip='$nip',tanggal_lahir='$tanggal_lahir',
         jenis_kelamin='$jk',
         alamat='$alamat',agama='$agama',
         pendidikan='$pendidikan',
         jabatan='$jabatan',
         no_telpon='$no_telpon'
         where id_guru=$id
") == true) {
    echo "sukses";
} else {
    echo "error";
}
_goto(_page('guru'));