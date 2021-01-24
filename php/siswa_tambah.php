<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into siswa(
    nama_siswa,tempat_lahir,nis,tanggal_lahir,
    jenis_kelamin,kelas,alamat,agama,
    tanggal_masuk,nama_ayah,nama_ibu,
    pekerjaan_ayah,pekerjaan_ibu)
     values(
         '$nama','$tempat_lahir','$nis','$tanggal_lahir',
         '$jk','$kelas','$alamat','$agama',
         '$tanggal_masuk','$ayah','$ibu',
         '$p_ayah', '$p_ibu'
    )
");
_goto(_page('dashboard'));