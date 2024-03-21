<?php
    require 'function.php';

    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $pasien = query("SELECT * FROM tbl_pasien WHERE id_pasien = $id")[0];

    if( isset($_POST["submit"]) ) {
	
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    
    
    }
?>

<html>

    <head>Rumah Sakit Islam Wonosobo</head>

    <body>
        <h1>Ubah Data Pasien</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $pasien["id_pasien"]; ?>">
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