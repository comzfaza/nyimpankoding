<?php

    $koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakatdb","root","");
   
    class masyarakat{
        public $nik;
        public $nama;
        public $username;
        public $password;
        public $no_tlp;


        function __construct($nik,$nama,$username,$password,$no_tlp)
        {
            $this->nik = $nik;
            $this->nama = $nama;
            $this->username = $username;
            $this->password = $password;
            $this->no_tlp = $no_tlp;
        }

        function tampilbiodata()
        {
            $this->nik;
            $this->nama;
            $this->username;
            $this->password;
            $this->no_tlp;
        }

        function tambah(){
            include 'koneksi.php';
            $koneksi->query("INSERT INTO `masyarakat` VALUES('$this->nik','$this->nama','$this->username',
            '$this->password','$this->no_tlp')");
        }
        function hapus(){
            include 'koneksi.php';
            $koneksi->query("DELETE FROM `masyarakat` where nik=$this->nik");
        }

        function update($nama,$data_username,$data_password,$no_tlp){
            include 'koneksi.php';
            $koneksi->query("UPDATE `masyarakat` SET `nama`='$nama',`username`='$data_username',`password`='$data_password',
            `no_tlp`='$no_tlp' WHERE nik='$this->nik'");
        }

    }

    $warga = new masyarakat('57667','uyr','hhhh','87877','7777');
    $warga->update("yhggfh","oujh","0990","6666");
?>    
        