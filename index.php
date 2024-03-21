<?php
    require 'function.php';
    $pasien = query( "SELECT * FROM tbl_pasien" );
?>

<!DOCTYPE html>
<html>

    <head>Rumah Sakit Islam Wonosobo</head>

    <body>
        <h1>Data Pasien</h1>

        <a href="tambah.php">Tambah Data Pasien</a>
        

        <table border="1" cellpadding="10" cellspacing="2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $pasien as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_pasien"]; ?></td>
                <td><?= $row["jenis_kelamin_pasien"]; ?></td>
                <td><?= $row["tgl_lahir_pasien"]; ?></td>
                <td><?= hitung_umur($row["tgl_lahir_pasien"])?></td>
                <td><?= $row["alamat_pasien"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id_pasien"]; ?>">UBAH |</a>
                    <a href="hapus.php?id=<?= $row["id_pasien"]; ?>">| HAPUS</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>

</html>