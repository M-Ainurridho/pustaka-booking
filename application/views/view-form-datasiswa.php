<html>
<head>
    <title>Form Input Data Siswa</title>
</head>
<body>
    <center>
        
<form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
<table>
<tr>
    <th colspan="3">
        Form Input Data Mata Kuliah
</th> </tr>
<tr>
    <td colspan="3">
    <hr> </td>
</tr> <tr>
    <th>Nis</th>
    <th>:</th>
    <td>
        <input type="text" name="nis_siswa" id="nis_siswa">
    </td>
</tr> <tr>
    <th>Nama</th>
<td>:</td>
        <td>
            <input type="text" name="nama_siswa" id="nama_siswa">
        </td>
</tr> <tr>
<th>Kelazzz</th>
<td>:</td>
        <td>
            <input type="text" name="kelas_siswa" id="kelas_siswa">
        </td>
</tr> <tr>
<th>Tanggal Lahir</th>
<td>:</td>
        <td>
            <input type="date" name="tgl_siswa" id="tgl_siswa">
        </td>
</tr> <tr>
<th>Tempat Lahir</th>
<td>:</td>
        <td>
            <input type="text" name="tmpt_siswa" id="tmpt_siswa">
        </td>
</tr> <tr>
<th>Almat</th>
<td>:</td>
        <td>
            <input type="text" name="alamat_siswa" id="alamat_siswa">
        </td>
</tr> <tr>
<th>Jenis Kelamin</th>
        <td>:</td>
        <td>
            <select name="jenisk_siswa" id="jenisk_siswa" required>
                <option value="">Pilih kelamin</option>
                <option value="Lakik">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </td>
</tr> <tr>
        <th>Agama</th>
        <td>:</td>
        <td>
            <select name="agm_siswa" id="agm_siswa" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </td>
</tr> <tr>
        <td colspan="3" align="center">
        <?php echo validation_errors(); ?>
            <input type="submit" value="Submit">
</td> </tr>
</table>
</form>
    </center>
</body>
</html>