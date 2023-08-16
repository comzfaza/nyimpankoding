<?php
    include "koneksi.php";
    $isi = $_POST['isi_laporan'];

    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];

    
    $tanggal = date("Y-m-d");
    $nik = "1222";
    $status = "0";
    $result = $koneksi->query("INSERT INTO pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) VALUES('$tanggal','$nik','$isi','$nama_foto','$status')");
    if($result){
        move_uploaded_file($asal_foto,"foto/$nama_foto");
        header("Location:hom.php");
    }



    