<?php
    require 'function.php';

    if( isset($_POST["submit"]) ) {
	
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    
    
    }
?>

<!DOCTYPE html>
<html>

    <head>Rumah Sakit Islam Wonosobo</head>

    <body>
        <h1>Masukkan Data Pasien</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </li>
                <li>
                    <label for="tgl_lahir">Tanggal Lahir :</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" required>
                </li>
                <li>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" required>
                </li>
                <button type="submit" name="submit">Simpan</button>
            </ul>
        </form>
    </body>

</html>