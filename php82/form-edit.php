<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apk ppdb web pro</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel=shortcut icon" href="C:\xampp\htdocs\WhatsApp Image 2024-01-20 at 13.40.30_398d4012.jpg" type="image/x-icon">
<body>
    
    <header>
        <h1>Web pro</h1>
        <h1>penerimaan peserta didik baru</h1>
    </header>

    <nav>
        <ul>
            <li> <a href="from-data.php">daftar baru </a> </li>
            <li> <a href="list-siswa.php">pendaftaran </a> </li>
        </ul>
    </nav>

    <h4>FORMULIS ppdb</h4>
    <?php
        include_once("config.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_siswa WHERE id = $id";

    $query = mysqli_query($db, $sql);

    $r = mysqli_fetch_assoc($query);
    ?>

    <div>
    <form action="proses-pendaftaran.php " method="post">
    </div>
    <div>

    <form action="proses-edit.php" method="post">

    <div>
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama" value="<?= $r['nama']; ?>" require>>
    </div>

    <div>
    <label for="">Alamat Lengkap</label>
    <textarea name="alamat" cols="30" rows="10"><?= $r['alamat'] ?></textarea>
    </div>


    <div>
    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin'] =='Laki-laki'? 'checked': ''?> value="Laki-laki?>Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
    </div>

    <div>
    <label for="">Agama</label>

    <select name="agama">
        <option value="Islam" <?= $r['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
        <option value="Kristen" <?= $r['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
        <option value="Katholik" <?= $r['agama'] == 'Katholik' ? 'selected' : '' ?>>Katholik</option>
        <option value="Hindu" <?= $r['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
        <option value="Budha" <?= $r['agama'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
        <option value="Khonghucu" <?= $r['agama'] == 'Khonghucu' ? 'selected' : '' ?>>Khonghucu</option>
    </select>
    </div>

        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>
</FORM>
    <footer>
    <i>dibuat dengan semangat 
    </footer>

</body>
</html>