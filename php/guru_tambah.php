<?php
include_once "conn.php";
print_r($_POST);
extract($_POST);

sql("insert into guru(
    nama_guru,nip,tanggal_lahir,
    jenis_kelamin,alamat,agama,
    pendidikan,jabatan,no_telpon)
     values(
         '$nama_guru','$nip','$tanggal_lahir',
         '$jk','$alamat','$agama',
         '$pendidikan','$jabatan','$no_telpon'
    )
");
_goto(_page('guru'));