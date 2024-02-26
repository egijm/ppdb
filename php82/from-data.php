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
    <div>
    <form action="proses-pendaftaran.php " method="post">
    </div>
    <div> 
     <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
         <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
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