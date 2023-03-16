<html>
<head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
<table> <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
</th> </tr>
            <tr>
                <td colspan="3">
<hr> </td>
</tr> <tr>
    <th>Nis</th>
    <th>:</th>
    <td>
        <?= $nis_siswa; ?>
    </td>
</tr> <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td>
        <?= $nama_siswa; ?>
    </td>
</tr> <tr>
    <td>Kelazz</td>
    <td>:</td>
    <td>
        <?= $kelas_siswa; ?>
    </td>
</tr> <tr>
<th>Tanggal Lahir</th>
    <th>:</th>
    <td>
        <?= $tgl_siswa; ?>
    </td>
</tr> <tr>
<th>Tempat Tinggal</th>
    <th>:</th>
    <td>
        <?= $tmpt_siswa; ?>
    </td>
</tr> <tr>
<th>Alamat</th>
    <th>:</th>
    <td>
        <?= $alamat_siswa; ?>
    </td>
</tr> <tr>
<th>Jenis Kelamin</th>
    <th>:</th>
    <td>
        <?= $jenisk_siswa; ?>
    </td>
</tr> <tr>
<th>Agama</th>
    <th>:</th>
    <td>
        <?= $agm_siswa; ?>
    </td>
</tr> <tr>

    <tr>
        <td colspan="3" align="center">
            <a href="<?= base_url('DataSiswa'); ?>">Kembali</a>
        </td>
    </tr>

                </td>
            </tr>
        </table>
</center>
</body>
</html>