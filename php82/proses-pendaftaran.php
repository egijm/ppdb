<?php
    require_once("config.php");
    if(isset($_POST['daftar']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        $sql = "insert into calon_siswa set nama ='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah'";
        $query = mysqli_query($db,$sql);

        if($query)
        {
            header('Location: list-siswa.php');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("akses dilarang.... <a href='index.php'> kembali </a>");
    }
    